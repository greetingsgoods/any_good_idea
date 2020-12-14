@extends('app')

@section('content')
    <div class="container">
        <h2>Какую информацию мы собираем</h2>
        <p>Вся информация, относящаяся к прямо или косвенно к вам, является персональной. Часть этой информации мы храним у себя в сервисе, в частности, но не ограничиваясь: ваше имя, email, название компании, список и содержимое ваших модулей.<br>
            Если вы предоставляете чужую информацию, например, о вашем супруге или коллеге, или о фирме, в которой вы работаете, то у вас должно быть разрешение на это.<br>
            <strong>Будьте внимательны! Мы никогда не запросим ваши пароли и данные банковских карт или онлайн кошельков!</strong></p>
        <h2>Зачем мы собираем информацию</h2>
        <p>Мы делаем это для того, чтобы предоставить вам лучший сервис и защитить ваши наработки от копирования. В частности, поэтому работать с модулями можно только после авторизации, это сделано для того, чтобы никто из других посетителей сайта не скопировал их.<br>
            Также часть информации критична для работы самих модулей, как например код партнёра Битрикса, без таких данных нельзя было бы создать и использовать модуль в принципе.</p>
        <h2>Ответственность</h2>
        <p>Мы стараемся защищать ваши данные. Для этого мы не выкладываем их в открытый доступ, используем шифрование и тщательно следим за доступами к продукту.<br>
            Несмотря на то, что мы прилагаем усилия для защиты ваших персональных данных, мы не можем обеспечить безопасность информации, которую вы передаёте через интернет. Поэтому вам следует быть внимательными и следить за тем, чтобы ваши данные не были перехвачены.<br>
            Также по законодательству РФ мы обязаны передавать ваши личные данные по запросу от государственных учреждений, если это потребуется.<br>
            Учитывая эти и другие факторы вам нужно быть максимально внимательными и осторожными, так как вы сами несёте всю ответственность за сохраность ваших персональных данных.</p>
        <h2>Дальнейшее использование сайта</h2>
        <p>Дальнейшее использование сайта предпологает, что вы согласны с соглашением ниже и полностью принимаете его положения.</p>
        <h2>Согласие на обработку персональных данных</h2>
        <p>
            Используя сайт <a href="localhost:3000">localhost:3000</a>, (заполняя формы,
            просматривая страницы) в соответствии с Федеральным законом № 152-ФЗ "О персональных данных" от 27.07.2006
            года, Пользователь своей волей и в своем интересе выражает свое безусловное согласие на обработку своих персональных данных
            LLc Дональд Иоаннович, зарегистрованным в соответствии
            с законодательством РФ по адресу: 101000, Нью-Йорк г, Lenina street
            (далее — Оператор).</p>
        <p>Персональные данные — любая информация, относящаяся к определенному или определяемому на
            основании такой информации физическому лицу. Пользователем выдано согласие на обработку следующих персональных
            данных:</p>
        <ul>
            <li>Фамилия</li>
            <li>Имя</li>
            <li>Отчество</li>
            <li>Адрес электронной почты</li>
            <li>Телефон</li>
            <li>Название компании</li>
            <li>Код партнёра Битрикса</li>
            <li>Список и состав модулей</li>
        </ul>
        <p>Настоящее
            Согласие дано Оператору для совершения следующих действий с персональными данными с использованием средств
            автоматизации и / или без использования таких средств:</p>
        <ul>
            <li>сбор</li>
            <li>систематизация</li>
            <li>накопление</li>
            <li>хранение</li>
            <li>уточнение (обновление, изменение</li>
            <li>использование</li>
            <li>блокирование</li>
            <li>обезличивание</li>
            <li>уничтожение</li>
            <li>удаление</li>
        </ul>
        <p>Согласие дается
            Оператору: LLc Дональд Иоаннович для обработки персональных данных Пользователя в целях:
        </p>
        <ul>
            <li>
                направление электронных писем;
            </li>
            <li>
                предоставление услуг и работ;
            </li>
            <li>
                направление информации, в том числе рекламной, об услугах и предложениях Оператора.
            </li>
        </ul>
        <p>
            Согласие действует до момента его отзыва путем направления соответствующего уведомления на электронный адрес
            {{ env('PUBLIC_EMAIL') }}. В случае отзыва согласия Пользователя, Оператор вправе продолжить обработку
            персональных данных при наличии оснований, указанных в пунктах 2-11 части 1 статьи 6, части 2 статьи 10 и
            части 2 статьи 11 Федерального закона №152-ФЗ от 27.07.2006 г.
        </p>
    </div>
@stop