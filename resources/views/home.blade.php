@extends('layouts.app')

@section('main-content')
  <section class="container mt-5">
    <h1>{{ $title }}</h1>
    <a href="{{route('trains')}}" class="btn btn-outline-success" >Go to trains</a>
  </section>
@endsection
