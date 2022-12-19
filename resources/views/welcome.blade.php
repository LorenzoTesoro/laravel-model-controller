@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row row-cols-5">
        @forelse($movies as $movie)
        <div class="col">
            <div class="card text-dark">
                <img class="card-img-top" src="holder.js/100px180/" alt="Title">
                <div class="card-body">
                    <h4 class="card-title">{{$movie->title}}</h4>
                    <p class="card-text">{{$movie->original_title}}</p>
                    <p class="card-text">{{$movie->nationality}}</p>
                    <p class="card-text">{{$movie->date}}</p>
                    <p class="card-text">{{$movie->vote}}</p>
                </div>
            </div>
        </div>
        @empty
        <div class="col">
            <p>We're sorry, there are no movies yet!</p>
        </div>
        @endforelse
    </div>
</div>
@endsection