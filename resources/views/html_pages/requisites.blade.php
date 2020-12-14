@extends('app')

@section('content')
    <div class="container">
        <h1>{{ trans('requisites.h1') }}</h1>
        <dl class="dl-horizontal">
            <dt>Наименование</dt>
            <dd>LLc Дональд Иоаннович</dd>
            <dt>ИНН</dt>
            <dd>1234567890</dd>
            <dt>ОГРНИП</dt>
            <dd>3456789012</dd>
            <dt>Расчетный счет</dt>
            <dd>1234567890123456</dd>
            <dt>БИК</dt>
            <dd>12345678</dd>
            <dt>Kорр. счет</dt>
            <dd>3000000000000000</dd>
        </dl>
    </div>
@stop