<h1>{{$prof[0]->name}} workers</h1>

<h2>
    @foreach($workers as $w)
        {{$w->name_surname}}<br>
    @endforeach
</h2>
