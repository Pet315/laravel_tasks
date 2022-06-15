@extends('website1/m_layout')
<link rel="stylesheet" href="./style_sheets/m_styles1.css">
<link rel="stylesheet" href="./style_sheets/m_styles6.css">

@section('title')
    Waste Energy. Запит прийнято
@endsection

@section('base')
    @yield('specific')
    <div style="height: 700px">
        <div class="mr_part2">
            <form action="./m_congrats" method="post">
                @csrf
                <a name="reg"><p class="name">Введіть ваше ім'я: <input type="text" name="name" /></p></a>
                <p class="email">E-mail: <input type="text" name="email" /></p>
                <p class="phone">Телефон: <input type="text" name="phone" /></p>
                <p class="product_id">Номер товару (*): <input type="text" name="product_id" /></p>
                <p class="quantity">Кількість (1,2...): <input type="text" name="quantity" /></p>
                <p class="button"><input type="submit" value="Відправити" /></p>
            </form>
        </div>
        <p class ="instr" style="margin-left: 50px; font-size: 10px">(*) 1 - металокорд (к-сть в тоннах,
            1500 грн/тонна), 2 - пічне паливо (в літрах, 15 грн/літр), 3 - альтернативне вугілля (1000 грн/тонна),
            4 - обладнання (120 тис.$/установка).<br><br>
            Поле "ім'я" обов'язкове для вказування. Якщо не бажаєте вводити і телефон, і ел. пошту,
            введіть щось одне, а в іншому полі поставте прочерк ("-"). Не залишайте поля порожніми.<br><br>
            Будьте уважні! Всього можна виконати до 5 замовлень включно!
            Замовлений товар буде видалено з бази даних після придбання, або через 3 тижні після надісланої заявки.
        </p>
    </div>
@endsection
