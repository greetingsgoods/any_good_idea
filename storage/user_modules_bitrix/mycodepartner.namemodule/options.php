<?php

use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Config\Option;

$module_id = 'mycodepartner.namemodule';

Loc::loadMessages($_SERVER["DOCUMENT_ROOT"].BX_ROOT."/modules/main/options.php");
Loc::loadMessages(__FILE__);

if ($APPLICATION->GetGroupRight($module_id) < "S"){
	$APPLICATION->AuthForm(Loc::getMessage("ACCESS_DENIED"));
}

\Bitrix\Main\Loader::includeModule($module_id);

$request = \Bitrix\Main\HttpApplication::getInstance()->getContext()->getRequest();



$aTabs = array(
	Array(
		'DIV'     => 'OSNOVNOE',
		'TAB'     => Loc::getMessage('MYCODEPARTNER_NAMEMODULE_TAB_OSNOVNOE'),
		'OPTIONS' => Array(
			array('param1', Loc::getMessage('MYCODEPARTNER_NAMEMODULE_OPTION_PARAM1_TITLE'), '', array('text', 0)),
			array('param3', Loc::getMessage('MYCODEPARTNER_NAMEMODULE_OPTION_PARAM3_TITLE'), '', array('selectbox', Array())),		),
	),
	Array(
		'DIV'     => 'MAIN',
		'TAB'     => Loc::getMessage('MYCODEPARTNER_NAMEMODULE_TAB_MAIN'),
		'OPTIONS' => Array(
			array('param5', Loc::getMessage('MYCODEPARTNER_NAMEMODULE_OPTION_PARAM5_TITLE'), '', array('checkbox', "Y")),		),
	),

	array(
		"DIV"     => "rights",
		"TAB"     => Loc::getMessage("MAIN_TAB_RIGHTS"),
		"TITLE"   => Loc::getMessage("MAIN_TAB_TITLE_RIGHTS"),
		"OPTIONS" => Array()
	),
);
#Сохранение

if ($request->isPost() && $request['Apply'] && check_bitrix_sessid()){

	foreach ($aTabs as $aTab){
		foreach ($aTab['OPTIONS'] as $arOption){
			if (!is_array($arOption))
				continue;

			if ($arOption['note'])
				continue;


			$optionName = $arOption[0];

			$optionValue = $request->getPost($optionName);

			Option::set($module_id, $optionName, is_array($optionValue) ? implode(",", $optionValue) : $optionValue);
		}
	}
}

$tabControl = new CAdminTabControl('tabControl', $aTabs);

?>
<? $tabControl->Begin(); ?>
<form method='post'
	  action='<? echo $APPLICATION->GetCurPage() ?>?mid=<?=htmlspecialcharsbx($request['mid'])?>&amp;lang=<?=$request['lang']?>'
	  name='mycodepartner_namemodule_settings'>

	<? foreach ($aTabs as $aTab):
		if ($aTab['OPTIONS']):?>
			<? $tabControl->BeginNextTab(); ?>
			<? __AdmSettingsDrawList($module_id, $aTab['OPTIONS']); ?>

		<? endif;
	endforeach; ?>

	<?
	$tabControl->BeginNextTab();

	require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/admin/group_rights.php");

	$tabControl->Buttons(); ?>

	<input type="submit" name="Apply" value="<? echo GetMessage('MAIN_SAVE') ?>">
	<input type="hidden" name="Update" value="Y">
	<input type="reset" name="reset" value="<? echo GetMessage('MAIN_RESET') ?>">
	<?=bitrix_sessid_post();?>
</form>
<? $tabControl->End(); ?>

