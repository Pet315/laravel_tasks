@extends('website1/m_layout')
<link rel="stylesheet" href="style_sheets/m_styles1.css">
<link rel="stylesheet" href="style_sheets/m_styles6.css">

@section('title')
    Waste Energy. Запит прийнято
@endsection

@section('base')
    <div style="height: 300px">
        <p class="thanks">
            Дякуємо, {{ $name }}. Вами замовлено товар "{{$product['name']}}" кількістю
            {{$quantity}} {{$product['unit']}}. Загальна ціна: {{$quantity*$product['price']}}
            {{$product['currency']}}.
            Очікуйте дзвінка, або листа на пошту. Найближчим часом з вами зв'яжуться.
            Також можете <u><a href="mobile2" style="color: #B53F3F">замовити ще бажаних товарів.</a></u>
        </p>
    </div>
@endsection
