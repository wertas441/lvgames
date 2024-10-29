@extends('layouts.app')

@section('title', 'Профиль')

@section('content')
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="profile-content p-4 rounded-3 shadow-lg" style="width: 630px; background-color: #2c2d32; border: 1px solid #444;">
            <h2 class="text-center text-white mb-4">Ваш профиль</h2>

            <div class="mb-3">
                <h5 class="text-white">Имя аккаунта:</h5>
                <p class="text-light">{{ auth()->user()->name }}</p>
            </div>

            <div class="mb-3">
                <h5 class="text-white">Адрес электронной почты:</h5>
                <p class="text-light">{{ auth()->user()->email }}</p>
            </div>

            <div class="mb-3">
                @php
                    $confirm = auth()->user()->email_verified_at;
                @endphp
                @if(!empty($confirm))
                    <span class="badge bg-success">Почта подтверждена</span>
                @else
                    <span class="badge bg-danger">Почта не подтверждена</span>
                    <div class="mt-2">
                        @csrf
                        <form action="{{ route('verification.notice') }}" method="GET">
                            <button type="submit" class="btn btn-outline-primary btn-sm">Подтвердить почту</button>
                        </form>
                    </div>
                @endif
            </div>

            <div class="mb-3">
                <h5 class="text-white">Ваш статус:</h5>
                <p class="text-light">{{ auth()->user()->admin ? 'Администратор' : 'Пользователь' }}</p>
            </div>

            <div class="d-flex justify-content-center mt-4">
                <a href="{{ route('profile.edit') }}" class="btn btn-success w-100 me-2">Редактировать профиль</a>
                <a href="{{route('password.request')}}" class="btn btn-danger w-100">Сменить пароль</a>
            </div>
        </div>
    </div>
@endsection

