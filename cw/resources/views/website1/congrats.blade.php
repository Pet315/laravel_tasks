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

    <div class="thanks">
        <h1>
            Дякуємо, {{ $name }}.
            Очікуйте дзвінка, або листа на пошту. Найближчим часом з вами зв'яжуться.
        </h1>
    </div>

@endsection
