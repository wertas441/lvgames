@extends('layouts.appwhithout')

@section('title', 'Сброс пароля')

@section('content')
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="mainContent p-4 rounded-1" style="width: 630px; background-color: #343a40;">
            <p class="text-center text-white fs-5">
                Введите новые данные
            </p>
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $err)
                            <li>{{ $err }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('password.store') }}" method="post" class="w-100">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label text-white">Введите email</label>
                    <input
                        type="email"
                        class="form-control"
                        id="email"
                        name="email"
                        value="{{ old('email', $request->email ?? '') }}"
                        placeholder="example@example.com"
                        required
                    >
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label text-white">Введите новый пароль</label>
                    <input
                        type="password"
                        class="form-control"
                        id="password"
                        name="password"
                        required
                    >
                </div>

                <div class="mb-3">
                    <label for="password_confirmation" class="form-label text-white">Введите пароль еще раз</label>
                    <input
                        type="password"
                        class="form-control"
                        id="password_confirmation"
                        name="password_confirmation"
                        required
                    >
                </div>

                <div class="d-flex justify-content-center gap-2">
                    <button type="submit" class="btn btn-success w-50">Отправить</button>
                    <a href="{{ route('welcome') }}" class="btn btn-secondary w-50">На главную</a>
                </div>
            </form>
        </div>
    </div>
@endsection

