@extends('layouts.main')

@section('container')
    <h1> {{ $name }} </h1>
    <h2> {{ $email }} </h2>
    <img src="images/{{ $image }}" alt="{{ $name }}">
@endsection