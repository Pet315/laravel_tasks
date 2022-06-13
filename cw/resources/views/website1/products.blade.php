@extends('website1/layout')
<link rel="stylesheet" href="style_sheets/styles2.css">

@section('title')
    Товари
@endsection

@section('menu')
    <a href="index">Головна</a>&emsp;&emsp;
    <u><b>Товари</b></u>&emsp;&emsp;
    <a href="news">Цікаві статті</a>&emsp;&emsp;
    <a href="index#vacancies">Вакансії</a>&emsp;&emsp;
    <a href="#contacts">Контакти</a>
@endsection

@section('base')
    <div class="part2">

        <hr class="line1">
        <h1 class="header1">Товари</h1>

        <div class="flexbox">

            <div class="product1">

                <img class="image" src="images/metalocord.jpg">
                <hr class="image_line">

                <h2 class="header">Металокорд</h2>
                <p class="text">Застосовується як армуючий матеріал при виробництві різних гумотехнічних виробів: конвеєрних стрічок,
                    клиноподібних ременів, шлангів високого тиску, а також при виробництві автомобільних та інших гумових шин.</p>
                <p class="price">Ціна: 1500 грн/тонна</p>

                <a href="registration#reg"><button class="buy">Придбати</button></a>
            </div>

            <div class="product2">

                <img class="image" src="images/eco-oil.jpg">
                <hr class="image_line">

                <h2 class="header">Паливо пічне альтернативне</h2>
                <p class="text">Таке пальне має досить низьку температуру спалаху, володіє високою тепловіддачею, має високу щільність,
                    низьку температуру замерзання, а також досить дешеве. Можна використовувати для опалення різних об'єктів.</p>
                <p class="price">Ціна: 15 грн/літр</p>

                <a href="registration#reg"><button class="buy">Придбати</button></a>

            </div>

        </div>

        <div class="flexbox">

            <div class="product3">

                <img class="image" src="images/alt_coal.jpg">
                <hr class="image_line">

                <h2 class="header">Залишок вуглецю (альтернативне вугілля)</h2>
                <p class="text">Вуглецевий залишок від піролізного процесу переробки шин. Використовується як тверде енергетичне паливо.
                    Відрізняється незначним вмістом сірки і може знайти застосування в якості сировини для отримання сорбентів або брикетів.</p>
                <p class="price">Ціна: 1000 грн/тонна</p>

                <a href="registration#reg"><button class="buy">Придбати</button></a>
            </div>

            <div class="product4">

                <img class="image" src="images/equipment.jpg">
                <hr class="image_line">

                <h2 class="header">Обладнання</h2>
                <p class="text">Для переробки шин та інших полімерних відходів у пальне використовуємо створене нашою компанією сучасне
                    обладнання, яке виготовлялося за унікальною методикою з використанням досвіду інших розробників Польщі, Німеччини та України.</p>
                <p class="price">Ціна: 120 тис. $</p>

                <a href="registration#reg"><button class="buy">Придбати</button></a>

            </div>

        </div>

    </div>
@endsection
