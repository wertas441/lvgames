@extends('layouts.appwhithout')

@section('title', 'Изменить товар')

@section('content')
    <div class="d-flex justify-content-center align-items-center vh-100 backOfLogin"
         style="background-image: url('{{ asset('images/backofgames4.jpg') }}');">
        <div class="card shadow-sm w-100" style="max-width: 800px; overflow: hidden;">
            <div class="card-body content rounded-1" style="height: auto; width: 100%;">
                <h2 class="card-title text-center text-white">Изменить карточку {{$game -> name}}</h2>

                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $err)
                                <li>{{ $err }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{route('game-update', ['id' => $game -> id])}}">
                    {{ csrf_field() }}
                    @method('PUT')
                    <!-- Макет с двумя колонками -->
                    <div class="row">
                        <!-- Первая колонка -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="name" class="form-label text-white">Название игры</label>
                                <input type="text" id="name" name="name" class="form-control"  value="{{$game -> name}}" required>
                            </div>

                            <div class="mb-3">
                                @php
                                $genre = json_decode($game ->genre)
                                @endphp
                                <label for="platform" class="form-label text-white">Жанр</label>
                                <select class="form-select" id="genre[]" name="genre[]"  multiple>
                                    <option value="Инди" {{in_array("Инди",$genre) ? 'selected' : ''}}>Инди</option>
                                    <option value="Экшен" {{in_array("Экшен",$genre) ? 'selected' : ''}}>Экшен</option>
                                    <option value="Шутер" {{in_array("Шутер",$genre) ? 'selected' : ''}}>Шутер</option>
                                    <option value="Приключение" {{in_array("Приключение",$genre) ? 'selected' : ''}}>Приключение</option>
                                    <option value="Стратегия" {{in_array("Стратегия",$genre) ? 'selected' : ''}}>Стратегия</option>
                                    <option value="Симулятор" {{in_array("Симулятор",$genre) ? 'selected' : ''}}>Симулятор</option>
                                    <option value="Ролевая игра" {{in_array("Ролевая игра",$genre) ? 'selected' : ''}}>Ролевая игра</option>
                                    <option value="Аниме" {{in_array("Аниме",$genre) ? 'selected' : ''}}>Аниме</option>
                                    <option value="Гонка" {{in_array("Гонка",$genre) ? 'selected' : ''}}>Гонка</option>
                                    <option value="ММО" {{in_array("ММО",$genre) ? 'selected' : ''}}>ММО</option>
                                    <option value="Файтинг" {{in_array("Файтинг",$genre) ? 'selected' : ''}}>Файтинг</option>
                                    <option value="Сапортивная игра" {{in_array("Сапортивная игради",$genre) ? 'selected' : ''}}>Сапортивная игра</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="date" class="form-label text-white">Дата релиза</label>
                                <input type="date" id="date" name="date" class="form-control" value="{{ $game->date }}">
                            </div>

                            <div class="mb-3">
                                <label for="about" class="form-label text-white">Описание товара</label>
                                <textarea name="about" id="about" class="form-control" rows="3">
                                    {{$game -> about}}
                                </textarea>
                            </div>

                            <div class="mb-3">
                                <label for="price" class="form-label text-white">Цена</label>
                                <input type="text" id="price" name="price" class="form-control"  value="{{$game -> price}}" required>
                            </div>
                        </div>



                        <!-- Вторая колонка -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="developer" class="form-label text-white">Разработчик</label>
                                <input type="text" id="developer" name="developer" class="form-control"  value="{{$game -> developer}}" required>
                            </div>

                            <div class="mb-3">
                                <label for="developer" class="form-label text-white">URL для картинки</label>
                                <input type="text" id="url" name="url" class="form-control" value="{{$game -> url}}" required>
                            </div>

                            <div class="mb-3">
                                <label for="publisher" class="form-label text-white">Издатель</label>
                                <input type="text" id="publisher" name="publisher" class="form-control" value="{{$game -> publisher}}" required>
                            </div>

                            <div class="mb-3">
                                <label for="platform" class="form-label text-white">Активация</label>
                                <select class="form-select" id="activation" name="activation">
                                    <option value="Steam" {{ $game->activation == 'Steam' ? 'selected' : '' }}>Steam</option>
                                    <option value="EA Play" {{ $game->activation == 'EA Play' ? 'selected' : '' }}>EA Play</option>
                                    <option value="Epic Games Launcher" {{ $game->activation == 'Epic Games Launcher' ? 'selected' : '' }}>Epic Games Launcher</option>
                                    <option value="Xbox" {{ $game->activation == 'Xbox' ? 'selected' : '' }}>Xbox</option>
                                </select>
                            </div>


                            <div class="mb-3">
                                @php
                                    $systems = json_decode($game->system); // Преобразование строки в массив
                                @endphp
                                <label for="platform" class="form-label text-white">Система</label>
                                <select class="form-select" id="system[]" name="system[]"  multiple>
                                    <option value="Windows" {{ in_array("Windows", $systems) ? 'selected' : '' }}>Windows</option>
                                    <option value="Linux" {{ in_array("Linux", $systems) ? 'selected' : '' }}>Linux</option>
                                    <option value="Mac" {{ in_array("Mac", $systems) ? 'selected' : '' }}>Mac</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="typeof" class="form-label text-white">Вид товара</label>
                                <select class="form-select" id="typeof" name="typeof" >
                                    <option value="Key" {{ $game->typeof == 'Key' ? 'selected' : '' }}>Ключ</option>
                                    <option value="Account" {{ $game->typeof == 'Account' ? 'selected' : '' }}>Аккаунт</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success w-100 mt-3">Изменить карточку</button>
                </form>
            </div>
        </div>
    </div>
@endsection
