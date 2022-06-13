<!DOCTYPE html>

<head>

    <meta charset="UTF-8">
{{--    <link rel="stylesheet" href="assets/css/style.css">--}}
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Montserrat:400,500,600&amp;subset=cyrillic-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">

{{--    <title>Waste Energy</title>--}}
{{--    <link rel="stylesheet" href="style_sheets/mobile/dist/styles1.css">--}}

    <title> @yield('title') </title>

</head>

<body>


<div class="part1">

    <!-- <img class="fond" width="460px" height="299px" src="images/mob_campfire.jpg"> -->
    <a href="mobile1">
        <img class="logo" src="images/icons/we_light.png">
        <h1 class="header">Компанія Waste Energy</h1>
        <p class="text">Переробка шин та інших полімерних відходів</p>
    </a>

    <a href="m_registration"><img class="connect" src="images/phone.png"></a>

    <!-- <hr> -->

    <a href="mobile2">
        <img class="icon1" src="images/delivery.png">
        <p1 class="icon1_text">Товари</p1>
    </a>
    <a href="mobile3">
        <img class="icon2" src="images/notes.png">
        <p1 class="icon2_text">Цікаві статті</p1>
    </a>
    <a href="mobile1#vacancies">
        <img class="icon3" src="images/desk.png">
        <p1 class="icon3_text">Вакансії</p1>
    </a>
    <a href="#contacts">
        <img class="icon4" src="images/net.png">
        <p1 class="icon4_text">Контакти</p1>
    </a>

</div>

@yield('base')

<div class="footer">

    <img class="logo" src="images/icons/we_dark.png">

    <p class="contacts">Телефон: +38(011)-111-11-11<br><br>Адреса: вул. Татарова, 15</p>
    <p class="social_networks"><a name="contacts">Знаходьте нас у соц. мережах</a></p>
    <img class="icon1" src="images/icons/telegram.png">
    <img class="icon2" src="images/icons/whatsapp.png">
    <img class="icon3" src="images/icons/facebook.png">
    <img class="icon4" src="images/icons/viber.png">
    <p class="license">© 2022 <u>Developer.</u> All rights reserved</p>

    <menu>
        <a href="mobile1"><p1 class="menu1">Головна<br><br><br></p1></a>
        <a href="mobile2"><p1 class="menu2">Товари<br><br><br></p1></a>
        <a href="mobile3"><p1 class="menu3">Цікаві статті<br><br><br></p1></a>
        <a href="mobile1#vacancies"><p1 class="menu4">Вакансії<br><br></p1></a>

    </menu>

</div>

<div class="teleport">
    <p class="advert">Зменшіть екран до 915рх, або <u><a href="index.html">cкористайтеся десктопною версією сайту</a></u></p>
</div>

</body>
