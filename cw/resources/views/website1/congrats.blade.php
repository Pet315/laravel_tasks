@extends('website1/layout')
<link rel="stylesheet" href="style_sheets/styles1.css">

@section('title')
    Waste Energy. Запит прийнято
@endsection

@section('menu')
    <a href="index">Головна</a>&emsp;&emsp;
    <a href="products">Товари</a>&emsp;&emsp;
    <a href="news">Цікаві статті</a>&emsp;&emsp;
    <a href="index#vacancies">Вакансії</a>&emsp;&emsp;
    <a href="#contacts">Контакти</a>
@endsection

@section('base')
<!--    --><?php //$name = $_COOKIE['login'] ?? null;?>
    <div class="thanks">
        <h1>
            Дякуємо, {{ htmlspecialchars($name) }}. Вами замовлено товар "{{$product['name']}}" кількістю
            {{$quantity}} {{$product['unit']}}. Загальна ціна: {{$quantity*$product['price']}}
            {{$product['currency']}}.
            Очікуйте дзвінка, або листа на пошту. Найближчим часом з вами зв'яжуться.
            Також можете <u><a href="products" style="color: #C83E4D">замовити ще бажаних товарів.</a></u>
        </h1>
{{--        <h2>Усі замовлені вами товари: {{$some}}</h2>--}}
    </div>

@endsection
