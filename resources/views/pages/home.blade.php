@extends('layouts.main')

@section('title', 'Comics')

@section('main-content')
    <main>
        @foreach($comics as $comic)
        <div class="comic my-5 col-2">
            <img src="{{ $comic->image }}" 
                alt="{{ $comic->type . ' - ' . $comic->title . '\'s poster' }}">
            <h6 class="mt-2">
                {{ $comic->title }}
            </h6>
        </div>
        @endforeach
    </main>
@endsection