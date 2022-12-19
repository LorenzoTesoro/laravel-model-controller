@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-4">
        @forelse($movies as $movie)
        <div class="col">
            <div class="card text-dark bg-dark text-white">
                <img class="card-img-top" src="{{$movie->cover_image}}" alt="">
                <div class="card-body">
                    <h4 class="card-title">Title: {{$movie->title}}</h4>
                    <div class="card-text original_title py-2">Original Title: {{$movie->original_title}}</div>
                    <div class="card-text nationality py-2">Nationality: {{$movie->nationality}}</div>
                    <div class="card-text release py-2">Release Date: {{$movie->date}}</div>
                    <div class="card-text vote">Average vote: {{$movie->vote}}</div>
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