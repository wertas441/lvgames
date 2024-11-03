@extends('layouts.appwhithout')

@section('title', 'Подтверждение почты')

@section('content')
    <div class="d-flex align-items-center justify-content-center min-vh-100 bg-dark">
        <div class="container mainContent text-center p-4 rounded-1" style="width: 630px; background-color: #343a40;">
            <p class="text-white mb-4">Спасибо за регистрацию, на вашу почту должно прийти письмо от нашего магазина.
                Если письмо не пришло, пожалуйста нажмите на кнопку ниже!</p>
            <div class="d-flex justify-content-center gap-3">
                <form action="{{ route('verification.send') }}" method="post" class="m-0">
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-success">Отправить еще раз</button>
                </form>
                <a href="{{ route('welcome') }}" class="btn btn-success">На главную</a>
            </div>
        </div>
    </div>

@endsection

