@extends('layouts.app')
@section('title', 'Trains' | 'Home' )
@section('main')
<main>
    <div class="container">
        @foreach ($trains as $item)
        <div class="card">  
            <h2>Azienda : {{$item['azienda']}} </h2>
            <h3>Stazione di partenza : {{$item['stazione_partenza']}}</h3>
            <h3>Stazione di partenza : {{$item['stazione_arrivo']}}</h3>
            <h4>Orario di partenza : {{$item['orario_partenza']}}</h4>
            <h4>Orario di arrivo : {{$item['orario_arrivo']}}</h4>
            <h5>Codice treno : {{$item['codice_treno']}} </h5>
        </div>        
        @endforeach

    </div>
</main>
@endsection