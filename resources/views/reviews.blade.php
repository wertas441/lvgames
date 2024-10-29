@extends('layouts.app')

@section('title', 'Отзывы')

@section('content')
<div class="container rev_block">

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif


    <div class="reviews_navbar d-flex justify-content-between">
        <h1 class="text-white">Отзывы о нас</h1>
        @auth
            <a href="{{route('make-review')}}" class="btn btn-success mt-2" style="height: 40px;">Оставить свой отзыв</a>
        @endif
    </div>
    <hr class="review-hr">


    @foreach ($allReviews as $review)
        <div class="review-item p-3 mb-4 bg-dark text-white rounded">
            <h5>{{ $review->name }}</h5>
            <p class="mb-1">{{ $review->review }}</p>
            <div>Оценка: {{ $review->stars }} / 5</div>
        </div>
    @endforeach

</div>
@endsection

