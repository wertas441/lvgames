@extends('layouts.appwhithout')

@section('title', 'Создать товар')

@section('content')
    <div class="d-flex justify-content-center align-items-center vh-100 backOfLogin"
         style="background-image: url('{{ asset('images/backofgames4.jpg') }}');">
        <div class="card shadow-sm w-100" style="max-width: 800px; overflow: hidden;">
            <div class="card-body content rounded-1" style="height: auto; width: 100%;">
                <h2 class="card-title text-center text-white">Добавить игру</h2>

                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $err)
                                <li>{{ $err }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="">
                    {{ csrf_field() }}

                    <!-- Макет с двумя колонками -->
                    <div class="row">
                        <!-- Первая колонка -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="name" class="form-label text-white">Название игры</label>
                                <input type="text" id="name" name="name" class="form-control"  value="{{$game -> name}}">
                            </div>

                            <div class="mb-3">
                                <label for="platform" class="form-label text-white">Жанр</label>
                                <select class="form-select" id="genre[]" name="genre[]" required multiple>
                                    <option value="Инди">Инди</option>
                                    <option value="Экшен">Экшен</option>
                                    <option value="Шутер">Шутер</option>
                                    <option value="Приключение">Приключение</option>
                                    <option value="Стратегия">Стратегия</option>
                                    <option value="Симулятор">Симулятор</option>
                                    <option value="Ролевая игра">Ролевая игра</option>
                                    <option value="Аниме">Аниме</option>
                                    <option value="Гонка">Гонка</option>
                                    <option value="ММО">ММО</option>
                                    <option value="Файтинг">Файтинг</option>
                                    <option value="Сапортивная игра">Сапортивная игра</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="date" class="form-label text-white">Дата релиза</label>
                                <input type="date" id="date" name="date" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="about" class="form-label text-white">Описание товара</label>
                                <textarea name="about" id="about" class="form-control" rows="3" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="price" class="form-label text-white">Цена</label>
                                <input type="text" id="price" name="price" class="form-control" required>
                            </div>
                        </div>



                        <!-- Вторая колонка -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="developer" class="form-label text-white">Разработчик</label>
                                <input type="text" id="developer" name="developer" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="developer" class="form-label text-white">URL для картинки</label>
                                <input type="text" id="url" name="url" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="publisher" class="form-label text-white">Издатель</label>
                                <input type="text" id="publisher" name="publisher" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="platform" class="form-label text-white">Активация</label>
                                <select class="form-select" id="activation" name="activation" required>
                                    <option value="Steam">Steam</option>
                                    <option value="EA Play">EA Play</option>
                                    <option value="Epic Games Launcher">Epic Games Launcher</option>
                                    <option value="Xbox">Xbox</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="platform" class="form-label text-white">Система</label>
                                <select class="form-select" id="system[]" name="system[]" required multiple>
                                    <option value="Windows">Windows</option>
                                    <option value="Linux">Linux</option>
                                    <option value="Mac">Mac</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="typeof" class="form-label text-white">Вид товара</label>
                                <select class="form-select" id="typeof" name="typeof" required>
                                    <option value="Key">Ключ</option>
                                    <option value="Account">Аккаунт</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success w-100 mt-3">Добавить карточку</button>
                </form>
            </div>
        </div>
    </div>
@endsection
