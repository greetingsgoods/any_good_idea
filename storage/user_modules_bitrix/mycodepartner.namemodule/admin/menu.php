<?
use \Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

AddEventHandler("main", "OnBuildGlobalMenu", "global_menu_mycodepartner_namemodule");

function global_menu_mycodepartner_namemodule(&$aGlobalMenu, &$aModuleMenu){
	$aModuleMenu[] = array(
		"parent_menu" => "global_menu_services",
		"icon"        => "default_menu_icon",
		"page_icon"   => "default_page_icon",
		"text"        => Loc::getMessage("MYCODEPARTNER_NAMEMODULE_ADMIN_MENU_PAGE1_TEXT"),
		"title"       => Loc::getMessage("MYCODEPARTNER_NAMEMODULE_ADMIN_MENU_PAGE1_TITLE"),
		"url"         => "mycodepartner_namemodule_page1.php",
	);

	$aModuleMenu[] = array(
		"parent_menu" => "global_menu_services",
		"icon"        => "default_menu_icon",
		"page_icon"   => "default_page_icon",
		"text"        => Loc::getMessage("MYCODEPARTNER_NAMEMODULE_ADMIN_MENU_PAGE2_TEXT"),
		"title"       => Loc::getMessage("MYCODEPARTNER_NAMEMODULE_ADMIN_MENU_PAGE2_TITLE"),
		"url"         => "mycodepartner_namemodule_page2.php",
	);

}
?>