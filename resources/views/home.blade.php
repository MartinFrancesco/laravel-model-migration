@extends('layouts.main')

@section('content')
    <h1>Car Shop</h1>

    <ul>
        @foreach ($cars as $car)
        <li>
            <h3>{{ $car->modello }}</h3>
            <div class="model">{{ $car->marca }}</div>
            <div class="plate">{{ $car->targa }}</div>
        </li>
        @endforeach
    </ul>

    <section id="app">
        <h2>Our Bikes</h2>
        <ul>
            <li v-for="bike in bikes">
                <h3>@{{ bike.modello }}</h3>
                <div class="brand">@{{ bike.marca }}</div>
            </li>
        </ul>
    </section>
@endsection
