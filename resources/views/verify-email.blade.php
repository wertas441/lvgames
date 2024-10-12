@extends('layouts.app')

@section('title', 'Подтверждение почты')

@section('content')
    <div class="container mainContent mt-auto pt-3 pb-3 rounded-1" style="width: 630px">
            <p class="text-center text-white">Спасибо за регистрацию! Теперь вам нужно подтвердить свой адрес электронной почты!</p>
            <p class="text-center text-white">Не получили ссылку - нажмите на кнопку ниже</p>
        <div class="d-flex justify-content-center ">
            <form action="{{route('verification.send')}}" method="post">
                {{ csrf_field() }}
                <button type="submit" class="btn btn-success w-10 ">Отпраить</button>
            </form>
            <a href="{{route('welcome')}}" class="btn btn-success w-10 ">На главную</a>
        </div>
    </div>
@endsection

