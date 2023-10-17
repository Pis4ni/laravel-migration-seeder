@extends('layouts.app')

@section('main-content')
  <section class="container mt-5">

    @forelse($trains as $train)
      <p>
        <strong>Company</strong>: {{ $train->type }} <br>
        <strong>Departure Station</strong>: {{ $train->departure_station }} <br>
        <strong>Arriving Station</strong>: {{ $train->arriving_station }}
        <strong>Departure Date</strong>: {{ $train->departure_date }}
        <strong>Departure Time</strong>: {{ $train->departure_time }}
        <strong>Arriving Date</strong>: {{ $train->arriving_date }}
        <strong>Arriving Time</strong>: {{ $train->arriving_time }}
        <strong>On Time</strong>: {{ $train->on_time }}
        <strong>Total Carriages</strong>: {{ $train->train_carriages }}
        <strong>Cancelled</strong>: {{ $train->cancelled }}
      </p>
      <hr>
    @empty
      <h2>Non ci sono risultati</h2>
    @endforelse
  </section>
@endsection