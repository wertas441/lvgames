@extends('layouts.app')

@section('title', 'Авторизация')

@section('content')
    <div class="d-flex justify-content-center align-items-center vh-100 login_back">
        <div class="card" style="max-width: 400px; width: 100%;">
            <div class="card-body content rounded-1" style="height: 440px">
                <h2 class="text-center mb-4 text-white">Авторизация</h2>
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $err)
                                <li>{{ $err }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="{{route('login')}}">
                    {{ csrf_field() }}
                    <div class="mb-3">
                        <label for="email" class="form-label text-white">Введите email</label>
                        <input type="email" class="form-control  " id="email" name="email" >
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label text-white">Введите пароль</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                        <div class="form-check mb-3 mt-3">
                            <input type="checkbox" class="form-check-input" id="remember" name="remember">
                            <label class="form-check-label text-white" for="remember">Запомнить меня</label>
                        </div>

                    <button type="submit" class="btn btn-success w-100">Войти</button>
                </form>
                    <a href="{{ route('register') }}" class="text-decoration-none btn btn-success mt-2 w-100 ">Зарегистрироваться</a>
                    <a href="{{route('password.request')}}" class="text-decoration-none btn btn-success mt-2 w-100">Забыли пароль?</a>
            </div>
        </div>
    </div>
@endsection
