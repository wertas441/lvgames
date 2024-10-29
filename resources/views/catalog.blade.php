@extends('layouts.app')

@section('title', 'Каталог')

@section('content')
    <div class="container rev_block">
        <div class="reviews_navbar d-flex justify-content-between">
            <h1 class="text-white">Каталог товаров</h1>
            @if(!empty($user -> admin) and $user -> admin = 1)
                <a href="" class="btn btn-success mt-2" style="height: 40px;">Добавить новый товар</a>
            @endif
        </div>
        <hr class="review-hr">
    </div>

@endsection
