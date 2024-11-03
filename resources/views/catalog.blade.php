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
        <div class="row mb-4 ">
            <div class="col-md-3 rounded-1" style="background-color: #202127; height: 590px">
                <form method="GET" action="{{route('catalog-page')}}">
                    <div class="mb-3 mt-3">
                        <label class="form-label text-white">Цена (₽)</label>
                        <div class="d-flex">
                            <input type="number" class="form-control me-2" name="min_price" placeholder="Мин" min="0" value="{{ request()->input('min_price') }}">
                            <input type="number" class="form-control" name="max_price" placeholder="Макс" min="0" value="{{ request()->input('max_price') }}">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="system" class="form-label text-white">Система</label>
                        <select id="system" name="system[]" class="form-select" multiple>
                            <option value="">Все системы</option>
                            <option value="Windows" {{ in_array('Windows', request()->input('system', [])) ? 'selected' : '' }}>Windows</option>
                            <option value="Linux" {{ in_array('Linux', request()->input('system', [])) ? 'selected' : '' }}>Linux</option>
                            <option value="Mac" {{ in_array('Mac', request()->input('system', [])) ? 'selected' : '' }}>Mac</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="activation" class="form-label text-white">Способ активации</label>
                        <select id="activation" name="activation" class="form-select">
                            <option value="">Все способы</option>
                            <option value="Steam" {{ request()->input('activation') == 'Steam' ? 'selected' : '' }}>Steam</option>
                            <option value="EA Play" {{ request()->input('activation') == 'EA Play' ? 'selected' : '' }}>EA Play</option>
                            <option value="Epic Games Launcher" {{ request()->input('activation') == 'Epic Games Launcher' ? 'selected' : '' }}>Epic Games Launcher</option>
                            <option value="Xbox" {{ request()->input('activation') == 'Xbox' ? 'selected' : '' }}>Xbox</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="genre" class="form-label text-white">Жанр</label>
                        <select id="genre" name="genre[]" class="form-select" multiple>
                            <option value="Инди" {{ in_array('Инди', request()->input('genre', [])) ? 'selected' : '' }}>Инди</option>
                            <option value="Экшен" {{ in_array('Экшен', request()->input('genre', [])) ? 'selected' : '' }}>Экшен</option>
                            <option value="Шутер" {{ in_array('Шутер', request()->input('genre', [])) ? 'selected' : '' }}>Шутер</option>
                            <option value="Приключение" {{ in_array('Приключение', request()->input('genre', [])) ? 'selected' : '' }}>Приключение</option>
                            <option value="Стратегия" {{ in_array('Стратегия', request()->input('genre', [])) ? 'selected' : '' }}>Стратегия</option>
                            <option value="Симулятор" {{ in_array('Симулятор', request()->input('genre', [])) ? 'selected' : '' }}>Симулятор</option>
                            <option value="Ролевая игра" {{ in_array('Ролевая игра', request()->input('genre', [])) ? 'selected' : '' }}>Ролевая игра</option>
                            <option value="Аниме" {{ in_array('Аниме', request()->input('genre', [])) ? 'selected' : '' }}>Аниме</option>
                            <option value="Гонка" {{ in_array('Гонка', request()->input('genre', [])) ? 'selected' : '' }}>Гонка</option>
                            <option value="ММО" {{ in_array('ММО', request()->input('genre', [])) ? 'selected' : '' }}>ММО</option>
                            <option value="Файтинг" {{ in_array('Файтинг', request()->input('genre', [])) ? 'selected' : '' }}>Файтинг</option>
                            <option value="Спортивная игра" {{ in_array('Спортивная игра', request()->input('genre', [])) ? 'selected' : '' }}>Спортивная игра</option>
                        </select>
                    </div>
                    <a href="{{route('catalog-page')}}" class="btn btn-success w-100 mb-2">Сбросить фильтр</a>
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
                                    <a href="{{ route('game-page', $game->id) }}" class="text-decoration-none">
                                    <img src="{{ $game->url }}" class="card-img-top" alt="{{ $game->name }}" style="height: 200px; object-fit: cover;">
                                    </a>
                                    <div class="card-body">
                                        <!-- Название игры и цена справа -->
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <h3 class="card-title">{{ $game->name }}</h3>

                                            <span class="fs-4 text-success">{{ $game->price }} ₽</span>
                                        </div>

                                        <!-- Иконки активации, платформы и жанры в одной строке -->
                                        <div class="d-flex justify-content-between align-items-center mt-2">
                                            <!-- Иконка активации -->
                                            <div class="d-flex align-items-center">
                                                @if($game->activation == 'Steam')
                                                    <img src="{{asset('images/miniicons/steam.svg')}}" alt="{{$game->activation}}" class="me-2" style="width: 24px;">
                                                @elseif($game->activation == 'Xbox')
                                                    <img src="{{asset('images/miniicons/xbox.svg')}}" alt="{{$game->activation}}" class="me-2" style="width: 24px;">
                                                @elseif($game->activation == 'Epic Games Launcher')
                                                    <img src="{{asset('images/miniicons/epicgames.svg')}}" alt="{{$game->activation}}" class="me-2" style="width: 24px;">
                                                @elseif($game->activation == 'EA Play')
                                                    <img src="{{asset('images/miniicons/eaicon.svg')}}" alt="{{$game->activation}}" class="me-2" style="width: 24px;">
                                                @endif

                                                <!-- Вертикальная полоска для разделения -->
                                                <span class="separator"></span>

                                                <!-- Иконка платформы -->
                                                @php
                                                    $system = json_decode($game->system);
                                                @endphp
                                                @foreach($system as $kindOfSystem)
                                                    @if($kindOfSystem == 'Windows')
                                                        <img src="{{asset('images/miniicons/windows.svg')}}" alt="{{ $game->system }}" class="ms-2" style="width: 24px;">
                                                    @elseif($kindOfSystem == 'Linux')
                                                        <img src="{{asset('images/miniicons/linux.svg')}}" alt="{{ $game->system }}" class="ms-2" style="width: 24px;">
                                                    @elseif($kindOfSystem == 'Mac')
                                                        <img src="{{asset('images/miniicons/apple.svg')}}" alt="{{ $game->system }}" class="ms-2" style="width: 24px;">
                                                    @endif
                                                @endforeach
                                            </div>

                                            <!-- Жанры -->
                                            <div class="d-flex flex-wrap mt-2 mb-0">
                                                @php
                                                    $genre = json_decode($game->genre);
                                                @endphp
                                                @foreach($genre as $typeOfGenre)
                                                    <span class="me-2">{{ $typeOfGenre }}</span>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>

                                        @if(!empty(Auth::user() -> admin))
                                        <div class="card-footer d-flex justify-content-between align-items-center">
                                                <form action="{{route('game-destroy', $game -> id)}}" method="POST" class="">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-light ">Удалить товар</button>
                                                </form>
                                                <form action="{{ route('game-edit', [$game -> id]) }}" method="get" class="">
                                                    @csrf
                                                    <button type="submit" class="btn btn-outline-light  ">Изменить товар</button>
                                                </form>
                                            <a href="" class="btn btn-success w-25">Купить</a>
                                        </div>
                                        @else
                                            <div class="card-footer d-flex justify-content-end align-items-center">
                                                <a href="" class="btn btn-success w-25">Купить</a>
                                            </div>
                                        @endif
                                </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
