{{--вміння вставити змінні, які передали в blade template--}}
{{--зробити наслідування від базового шаблону--}}

@extends('hello')
@section('base')
    <h1>User Profile</h1>
    <p>---------------</p>
    <h3>Your name: {{$name}}</h3>
    <h3>Your surname: {{$surname}}</h3>
    <h3>Your patronymic: {{$patr}}</h3>
    <h3>Your friends:</h3>

    {{--вміння foreach-ем пройти по масиву, який ви туди передали--}}
    @foreach($friends as $fr)
        {{$fr}},
    @endforeach

    {{--зробити if--}}
    @if(5 < $time_hours and $time_hours < 10)
        <h3>Good morning!</h3>
    @elseif(21 < $time_hours and $time_hours < 24)
        <h3>Good night</h3>
    @endif
@endsection
