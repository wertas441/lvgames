@extends('layouts.appwhithout')

@section('title', 'Оставить отзыв')

@section('content')
    <div class="d-flex justify-content-center align-items-center vh-100 backOfLogin" style="background-image: url('{{ asset('images/backofgames4.jpg') }}');">
        <div class="card shadow-sm w-100" style="max-width: 400px;">
            <div class="card-body content rounded-1" style="height: 475px;">
                <h2 class="card-title text-center text-white">Оставить отзыв</h2>
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
                    <div class="mb-3">
                        <label for="name" class="form-label text-white">Имя аккаунта</label>
                        <input type="text" id="name" name="name" class="form-control" value="{{ $user->name }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="review" class="form-label text-white">Отзыв</label>
                        <textarea name="review" id="review" class="form-control" rows="5" placeholder="Введите ваш отзыв здесь..." required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="stars" class="form-label text-white">Оценка работы магазина</label>
                        <select class="form-select" id="stars" name="stars" required>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success w-100">Отправить отзыв</button>
                </form>
            </div>
        </div>
    </div>

@endsection
