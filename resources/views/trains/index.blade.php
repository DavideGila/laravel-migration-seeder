@extends('layouts.app')

@section('title', 'Trains')

@section('content')
<main>
    <h1>Trains</h1>
    @foreach ($trains as $train)
        <div>
            <h3>{{$train->agency}}</h3>
            <p>Il treno partirà da {{$train->departure_station}} e arriverà a {{$train->arrival_station}}</p>
            <p>Tempo stimato di partenza: {{$train->departure_time}} </p>
            <p>Tempo stimato di arrivo: {{$train->arrival_time}} </p>
            <p>Codice del treno: {{$train->train_code}}</p>
            <p>Numero carrozze: {{$train->carriage_number}}</p>
            <p>In orario: @if ($train->on_time == 0)
                No
            @else Sì
            @endif</p>
            <p>Cancellato @if ($train->canceled == 0)
                No
            @else Sì
            @endif</p>
        </div>
    @endforeach

</main>

@endsection
