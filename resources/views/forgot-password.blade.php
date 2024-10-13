@extends('layouts.appwhithout')

@section('title', 'Сброс пароля')

@section('content')
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="mainContent p-4 rounded-1" style="width: 630px; background-color: #343a40;">
            <p class="text-center text-white">
                Забыли пароль? Просто сообщите нам свой адрес электронной почты, и мы вышлем вам ссылку для сброса пароля,
                которая позволит вам выбрать новый.
            </p>
            <form action="{{ route('password.email') }}" method="post" class="d-flex flex-column align-items-center gap-3">
                {{ csrf_field() }}
                <input type="email" name="email" id="email" class="form-control" placeholder="Введите email" required>
                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-success">Отправить</button>
                    <a href="{{ route('welcome') }}" class="btn btn-secondary">На главную</a>
                </div>
            </form>
        </div>
    </div>
@endsection

