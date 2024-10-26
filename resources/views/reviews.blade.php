@extends('layouts.app')

@section('title', 'Отзывы')

@section('content')
<div class="container rev_block">
    <div class="reviews_navbar d-flex justify-content-between">
        <h1 class="text-white">Отзывы о нас</h1>
        @auth
            <a href="{{route('make-rev-page')}}" class="btn btn-success mt-2" style="height: 40px;">Оставить свой отзыв</a>
        @endif
    </div>
    <hr class="line-white">

</div>
@endsection

