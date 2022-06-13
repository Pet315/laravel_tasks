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
            <a name="reg"><p class="name">Введіть ваше ім'я: <input type="text" name="name" /></p></a>
            <p class="email">E-mail: <input type="text" name="email" /></p>
            <p class="phone">Телефон: <input type="text" name="phone" /></p>
            <p class="comment">Відгук/питання/замовлення: <input type="text" name="comment" /></p>
            <p class="button"><input type="submit" value="Відправити" /></p>
        </form>
    </div>
@endsection
