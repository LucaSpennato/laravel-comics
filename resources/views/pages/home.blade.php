@extends('layouts.main')

@section('title', 'Comics')

@section('main-content')

    <h1>
        ciao
    </h1>
    @foreach($comics as $comic)
        {{ $comic->title }}
    @endforeach
@endsection