@extends('layouts.main')

@section('content')
    <h1>ohhhh</h1>

    <ul>
        @foreach ($cars as $car)
        <li>
            <h3>{{ $car->modello }}</h3>
            <div class="model">{{ $car->marca }}</div>
            <div class="plate">{{ $car->targa }}</div>
        </li>
        @endforeach
    </ul>
@endsection
