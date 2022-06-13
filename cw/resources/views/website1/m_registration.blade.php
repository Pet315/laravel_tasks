@extends('website1/m_layout')
<link rel="stylesheet" href="./style_sheets/m_styles1.css">
<link rel="stylesheet" href="./style_sheets/m_styles5.css">

@section('title')
    Waste Energy. Запит прийнято
@endsection

@section('base')
    <div class="mr_part2">
        <form action="./m_congrats" method="post">
            @csrf
            <a name="reg"><p class="name">Введіть ваше ім'я: <input type="text" name="name" /></p></a>
            <p class="email">E-mail: <input type="text" name="email" /></p>
            <p class="phone">Телефон: <input type="text" name="phone" /></p>
            <p class="comment">Відгук/питання/замовлення:<br><br> <input type="text" name="comment" /></p><br><br>
            <p class="button"><input type="submit" value="Відправити" /></p>
        </form>
    </div>
@endsection
