@extends('website1/m_layout')
<link rel="stylesheet" href="./style_sheets/m_styles3.css">

@section('title')
    Цікаві статті
@endsection

@section('base')

    <div class="part2">

        <hr class="line1">
        <h1 class="header1">Цікаві статті</h1>

        <div class="product1">

            <img class="image" src="images/kuwait_fire1.jpg">
            <hr class="image_line">

            <h1 class="header2">Пожежа на сміттєзвалищі в Кувейті</h1>
            <p class="text">У Кувейті горить найбільше у світі звалище автомобільних шин, повідомляють місцеві ЗМІ.
                Очевидці публікують фотографії та відео пожежі та зазначають, що гігантський стовп диму видно здалеку...</p>
            <p class="price">Джерело: <a href="https://motor.ru/news/video-of-thick-black-smoke-04-08-2021.htm">Motor News</a></p>

            <a href="mobile4"><button class="button1">Читати</button></a>
        </div>

        <div class="product2">

            <img class="image" src="images/stop_plastic1.jpg">
            <hr class="image_line">

            <h1 class="header3">Заборона пластику в Україні</h1>
            <p class="text">Закон спрямований на зменшення обсягу використання в Україні пластикових пакетів, обмеження їх розповсюдження
                з метою поліпшення стану навколишнього природного середовища та благоустрою територій...</p>
            <p class="price">Джерело: <a href="http://vin.gov.ua/news/528-zahalnoderzhavni-novyny/37027-pryiniato-zakon-pro-obmezhennia-
                obihu-plastykovykh-paketiv-na-terytorii-ukrainy">Вінницька ОВА</a></p>

            <a href="http://vin.gov.ua/news/528-zahalnoderzhavni-novyny/37027-pryiniato-zakon-pro-obmezhennia-
            obihu-plastykovykh-paketiv-na-terytorii-ukrainy"><button class="button2">Читати</button></a>

        </div>

        <div class="product3">

            <img class="image" src="images/heat_years1.jpg">
            <hr class="image_line">

            <h1 class="header4">2021 - cеред найспекотніших років</h1>
            <p class="text">Планета пережила черговий рекордно спекотний рік, кажуть вчені та попереджають, що разом із температурою
                збільшується і концентрація парникових газів - головної причини глобального потепління, спричиненого людиною...</p>
            <p class="price">Джерело: <a href="https://www.bbc.com/ukrainian/news-59942946#:~:text=%D0%A3%202021%20%D1%80%D0%BE%D1%86%D1%
                96%2C%20%D0%B7%D0%B0%20%D0%BE%D0%BF%D1%80%D0%B8%D0%BB%D1%8E%D0%B4%D0%BD%D0%B5%D0%BD%D0%BE%D1%8E,%D0%BD%D1%96%D0%B6%20%D1%
                83%201850%2D1900%20%D1%80%D0%BE%D0%BA%D0%B0%D1%85.&text=Getty%20Images-,%D0%9F%D1%96%D0%B4%D0%BF%D0%B8%D1%81%20%D0%B4%D0%
                BE%20%D1%84%D0%BE%D1%82%D0%BE%2C,15%20%D1%80%D0%BE%D0%BA%D1%96%D0%B2%20%2D%205%20%D1%82%D1%80%D0%BB%D0%BD%20%D1%82%D0%BE%
                D0%BD%D0%BD.">BBC News</a></p>

            <a href="https://www.bbc.com/ukrainian/news-59942946#:~:text=%D0%A3%202021%20%D1%80%D0%BE%D1%86%D1%
            96%2C%20%D0%B7%D0%B0%20%D0%BE%D0%BF%D1%80%D0%B8%D0%BB%D1%8E%D0%B4%D0%BD%D0%B5%D0%BD%D0%BE%D1%8E,%D0%BD%D1%96%D0%B6%20%D1%
            83%201850%2D1900%20%D1%80%D0%BE%D0%BA%D0%B0%D1%85.&text=Getty%20Images-,%D0%9F%D1%96%D0%B4%D0%BF%D0%B8%D1%81%20%D0%B4%D0%
            BE%20%D1%84%D0%BE%D1%82%D0%BE%2C,15%20%D1%80%D0%BE%D0%BA%D1%96%D0%B2%20%2D%205%20%D1%82%D1%80%D0%BB%D0%BD%20%D1%82%D0%BE%
            D0%BD%D0%BD."><button class="button3">Читати</button></a>
        </div>

        <div class="product4">

            <img class="image" src="images/rubbish.jpg">
            <hr class="image_line">

            <h1 class="header5">Життя на сміттєвій плямі</h1>
            <p class="text">Північно-Тихоокеанський субтропічний круговорот є домом для дифузного туману сміття, відомого як «Велика
                тихоокеанська сміттєва пляма». Хоча ця пляма розкинута на площі 1,6 млн кв. км., оцінюється, що вона містить 79 000...</p>
            <p class="price">Джерело: <a href="https://www.sciencealert.com/plants-and-animals-have-started-living-on-the-great-pacific-garbage-patch">Science Alert</a></p>

            <a href="https://www.sciencealert.com/plants-and-animals-have-started-living-on-the-great-pacific-garbage-patch"><button class="button4">Читати</button></a>

        </div>

    </div>

@endsection
