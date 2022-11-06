<h1>VictorFox Company</h1>

<h2>
    <br><u>Our subdivisions:<br></u>
    @foreach($subdivs as $subdiv)
        {{$subdiv->id}}. {{$subdiv->name}}, head: {{$subdiv->head_name_surname}}<br>
    @endforeach

    <br><u>Our workers:</u><br>
    @foreach($workers as $worker)
        {{$worker->name_surname}}, subdivision: {{$worker->subdivision_id}}<br>
    @endforeach

    <br><u>Job titles:</u><br>
    @foreach($profs as $prof)
        {{$prof->name}}, salary per month: {{$prof->month_salary}}<br>
    @endforeach

    <br><u>More detailed information about workers:</u><br>
    {{$workers}}
</h2>
