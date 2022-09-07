@extends('layouts.main')

@section('title', 'Comics')

@section('main-content')
    <main>
        <div class="hero">
            <img src="../assets/images/jumbotron.jpg"  alt="teen titans go jumbotron">
        </div>
        
        <div class="container">
            <div class="row col-10 m-auto py-5 gx-3">
            
                @foreach($comics as $comic)
                <div class="comic my-5 col-2">
                    <img src="{{ $comic->image }}" 
                        alt="{{ $comic->type . ' - ' . $comic->title . '\'s poster' }}">
                    <h6 class="mt-2">
                        {{ $comic->title }}
                    </h6>
                </div>
                @endforeach

            </div>

        <div class="text-center pb-5">
            <button href="#" class="btn px-5 btn-primary rounded-0">Load More</button>
        </div>

    </div>
    </main>
@endsection