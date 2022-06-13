<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Montserrat:400,500,600&amp;subset=cyrillic-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">

    <title> @yield('title') </title>
{{--    <link rel="stylesheet" href="style_sheets/dist/styles1.css">--}}

</head>

<body>

<div class="part1">

    <img class="logo" src="images/icons/we_light.png">

    <p1> @yield('menu') </p1>

    <!-- <menu class="menu1"> -->
{{--    <p1><a href="index">Головна&emsp;&emsp;</a>--}}
{{--        <a href="products">Товари</a>&emsp;&emsp;--}}
{{--        <a href="news">Цікаві статті</a>&emsp;&emsp;--}}
{{--        <a href="#vacancies">Вакансії</a>&emsp;&emsp;--}}
{{--        <a href="#contacts">Контакти</a></p1>--}}
    <!-- </menu> -->

    <h1 class="header">Компанія Waste Energy</h1>

    <p class="text">Переробка шин та інших полімерних відходів</p>

    <a href="registration#reg"><button class="button">Зв’язатись з нами</button></a>

</div>

@yield('base')

<div class="footer">
    <!-- <div class="fond"></div> -->
    <img class="logo" src="images/icons/we_dark.png">

    <menu class="menu2"><a href="index">Головна</a>&emsp;&emsp;
        <a href="products">Товари</a>&emsp;&emsp;
        <a href="news">Цікаві статті</a>&emsp;&emsp;
        <a href="#vacancies">Вакансії</a>&emsp;&emsp;
        Контакти
    </menu>

    <p class="license">© 2022 <u>Developer.</u> All rights reserved</p>
    <p class="contacts">Телефон: +38(011)-111-11-11<br><br>Адреса: вул. Татарова, 15</p>
    <p class="social_networks"><a name="contacts">Знаходьте нас у соц. мережах</a></p>

    <div class="icons">
        <img class="icon1" src="images/icons/telegram.png">
        <img class="icon2" src="images/icons/whatsapp.png">
        <img class="icon3" src="images/icons/facebook.png">
        <img class="icon4" src="images/icons/viber.png">
    </div>
</div>

<div class="teleport">
    <h1 class="advert">Збільшіть екран на понад 552рх, або <a href="mobile1"><u>скористайтеся мобільною версією сайту</u></a></h1>

    <!-- <h1 class="advert">Cкористайтеся <a href="mobile1.blade.php"><u>мобільною версією сайту</u></a><br><br>
        (<a href="index.blade.php"><u>повернутися назад</u></a>)</h1> -->
</div>

</body>
