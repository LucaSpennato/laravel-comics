@extends('layouts.main')

@section('title', 'Comics')

@section('main-content')
    @foreach($comics as $comic)
        {{ $comic->title }}
    @endforeach
@endsection