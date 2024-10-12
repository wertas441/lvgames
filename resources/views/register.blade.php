@extends('layouts.appwhithout')

@section('title', 'Регистрация')

@section('content')
    <div class="d-flex justify-content-center align-items-center vh-100 mainContent  ">
        <div class="card shadow-sm w-100" style="max-width: 400px;">
            <div class="card-body content rounded-1" style="height: 515px">
                <h2 class="card-title text-center text-white">Регистрация</h2>
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $err)
                                <li>{{ $err }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="{{route('register')}}">
                    {{ csrf_field() }}
                    <div class="mb-3">
                        <label for="name" class="form-label text-white">Введите имя</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label text-white">Введите email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label text-white">Введите пароль</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label text-white" >Введите пароль еще раз</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                    </div>
                    <button type="submit" class="btn btn-success w-100">Зарегистрироваться</button>
                </form>
                <div class="mt-2 text-center">
                    <a href="{{ route('login') }} " class="btn btn-success w-100">Уже заригистрированны?</a>
                </div>
            </div>
        </div>
    </div>
@endsection
