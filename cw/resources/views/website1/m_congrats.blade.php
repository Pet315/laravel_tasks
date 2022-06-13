@extends('website1/m_layout')
<link rel="stylesheet" href="style_sheets/m_styles1.css">
<link rel="stylesheet" href="style_sheets/m_styles5.css">

@section('title')
    Waste Energy. Запит прийнято
@endsection

@section('base')

    <p class="thanks">
        Дякуємо, {{ $name }}.
        Очікуйте дзвінка, або листа на пошту. Найближчим часом з вами зв'яжуться.
    </p>

@endsection
