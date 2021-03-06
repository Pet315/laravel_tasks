@extends('website1/layout')
<link rel="stylesheet" href="style_sheets/styles1.css">
<link rel="stylesheet" href="style_sheets/styles5.css">

@section('title')
    Waste Energy. Зв'язок
@endsection

@section('menu')
    <a href="index">Головна</a>&emsp;&emsp;
    <a href="products">Товари</a>&emsp;&emsp;
    <a href="news">Цікаві статті</a>&emsp;&emsp;
    <a href="index#vacancies">Вакансії</a>&emsp;&emsp;
    <a href="#contacts">Контакти</a>
@endsection

@section('base')
    @yield('specific')
    <div class="part2">
        <form action="./congrats" method="post">
            @csrf
{{--            <a name="reg">--}}
                <p class="name">Введіть ваше ім'я та прізвище: <input type="text" name="name" /></p>
{{--            </a>--}}
            <p class="email">E-mail: <input type="text" name="email" /></p>
            <p class="phone">Телефон: <input type="text" name="phone" /></p>
            <p class="product_id">Товар:
                <select name="product_id" style="font-size: 25px; margin-left: 40px; height: 50px; width: 500px">
                    <option value="1" selected>Металокорд</option>
                    <option value="2">Пічне паливо</option>
                    <option value="3">Альтернативне вугілля</option>
                    <option value="4">Обладнання</option>
                </select>
            </p>
            <p class="quantity">Кількість (1,2...): <input type="text" name="quantity" /></p>
            <p class="button"><input type="submit" value="Відправити" /></p>
        </form>
    </div>
    <p class ="instr" style="margin-left: 100px; font-size: 23px">Поле "ім'я" обов'язкове для вказування. Якщо не бажаєте вводити ел. пошту,
        поставте прочерк (-). Не залишайте поля порожніми.<br><br>
        Будьте уважні! Всього можна виконати до 5 замовлень включно!
        Замовлений товар буде видалено з бази даних після придбання, або через 3 тижні після надісланої заявки.
    </p>
@endsection
