@extends('layouts.app')

@section('title', 'Каталог')

@section('content')
    <div class="container my-5">
        <div class="reviews_navbar d-flex justify-content-between align-items-center">
            <h1 class="text-white">Каталог товаров</h1>
            @if(!empty($user->admin) && $user->admin == 1)
                <a href="{{ route('make-games') }}" class="btn btn-success mt-2" style="height: 40px;">
                    Добавить новый товар
                </a>
            @endif
        </div>

        <hr class="review-hr text-light">

        <!-- Фильтр -->
        <div class="row mb-4">
            <div class="col-md-3" style="background-color: #202127; height: 440px">
                <h5 class="text-white">Фильтры</h5>
                <form method="GET" action="">
                    <div class="mb-3">
                        <label class="form-label text-white">Цена (₽)</label>
                        <div class="d-flex">
                            <input type="number" class="form-control me-2" name="min_price" placeholder="Мин" min="0">
                            <input type="number" class="form-control" name="max_price" placeholder="Макс" min="0">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="platform" class="form-label text-white">Платформа</label>
                        <select id="platform" name="platform" class="form-select">
                            <option value="">Все платформы</option>
                            <option value="PC">PC</option>
                            <option value="PlayStation">PlayStation</option>
                            <option value="Xbox">Xbox</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="activation" class="form-label text-white">Способ активации</label>
                        <select id="activation" name="activation" class="form-select">
                            <option value="">Все способы</option>
                            <option value="Steam">Steam</option>
                            <option value="Epic Games">Epic Games</option>
                            <option value="GOG">GOG</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="genre" class="form-label text-white">Жанр</label>
                        <select id="genre" name="genre" class="form-select">
                            <option value="">Все жанры</option>
                            <option value="RPG">RPG</option>
                            <option value="Shooter">Шутер</option>
                            <option value="Adventure">Приключение</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-success w-100">Применить фильтр</button>
                </form>
            </div>

            <!-- Карточки товаров -->
            <div class="col-md-9">
                <div class="row row-cols-1 row-cols-md-2 g-4">
                    @foreach($allGames as $game)
                        <div class="col">
                            <div class="card h-100 text-light" style="background-color: #202127">
                                <!-- Картинка игры -->
                                <img src="{{ $game->url }}" class="card-img-top" alt="{{ $game->name }}" style="height: 200px; object-fit: cover;">

                                <div class="card-body">
                                    <!-- Название игры и цена справа -->
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h3 class="card-title">{{ $game->name }}</h3>
                                        <span class="fs-4 text-success">{{ $game->price }} ₽</span>
                                    </div>

                                    <!-- Иконки платформы и активации -->
                                    <div class="d-flex align-items-center mt-2">

                                        <!-- Иконка активации -->
                                        @if($game->activation == 'Steam')
                                            <img src="{{asset('images/miniicons/steam.svg')}}" alt="{{$game->activation}}" class="me-2" style="width: 24px;">
                                        @elseif($game->activation == 'Xbox')
                                            <img src="{{asset('images/miniicons/xbox.svg')}}" alt="{{$game->activation}}" class="me-2" style="width: 24px;">
                                        @elseif($game->activation == 'Epic Games Launcher')
                                            <img src="{{asset('images/miniicons/epicgames.svg')}}" alt="{{$game->activation}}" class="me-2" style="width: 24px;">
                                        @elseif($game->activation == 'EA Play')
                                            <img src="{{asset('images/miniicons/eaicon.svg')}}" alt="{{$game->activation}}" class="me-2" style="width: 24px;">
                                        @endif

                                        <!-- Иконка платформы -->
                                        @php
                                            $system = json_decode($game->system);
                                            $genre = json_decode($game ->genre);
                                        @endphp
                                        @foreach($system as $kindOfSystem)
                                            @if($kindOfSystem == 'Windows')
                                                <img src="{{asset('images/miniicons/windows.svg')}}" alt="{{ $game->system }}" class="me-2" style="width: 24px;">
                                            @elseif($kindOfSystem == 'Linux')
                                                <img src="{{asset('images/miniicons/linux.svg')}}" alt="{{ $game->system }}" class="me-2" style="width: 24px;">
                                            @elseif($kindOfSystem == 'Mac')
                                                <img src="{{asset('images/miniicons/apple.svg')}}" alt="{{ $game->system }}" class="me-2" style="width: 24px;">
                                            @endif
                                        @endforeach
                                    </div>

                                    <!-- Жанр -->
                                    @foreach($genre as $typeOfGenre)
                                        <p class="mt-2 mb-0"> {{ $typeOfGenre }}</p>
                                    @endforeach
                                </div>

                                <!-- Кнопки -->
                                <div class="card-footer d-flex justify-content-between align-items-center">
                                    <a href="" class="btn btn-outline-light">Подробнее</a>
                                    <button class="btn btn-success">Купить</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
