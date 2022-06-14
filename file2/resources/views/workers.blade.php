<h1>{{$subdiv[0]->name}} subdivision workers</h1>

<h2>
    @foreach($workers as $w)
        {{$w->name_surname}}<br>
    @endforeach
</h2>
