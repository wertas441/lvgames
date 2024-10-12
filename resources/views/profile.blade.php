@extends('layouts.app')

@section('title', 'Профиль')

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-primary text-white">
                        <h3 class="mb-0">Профиль пользователя</h3>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-md-4 text-center">
                                <img src="https://via.placeholder.com/150" class="rounded-circle img-fluid" alt="User Avatar">
                            </div>
                            <div class="col-md-8">
                                <h4>{{ auth()->user()->name }}</h4>
                                <p class="text-muted">{{ auth()->user()->email }}</p>
                                @php
                                    $confirm = auth()->user()->email_verified_at;
                                    $admin = auth()->user()->admin;
                                @endphp
                                @if(!empty($confirm))
                                    <span class="badge bg-success">Почта подтверждена</span>
                                @else
                                    <span class="badge bg-danger">Почта не подтверждена</span>
                                    <div class="mt-2">
                                        <a href="{{route('verification.notice')}}" class="btn btn-outline-primary btn-sm">Подтвердить почту</a>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-md-6">
                                <h5>Ваш статус:</h5>
                                @if(!empty($admin))
                                    <span class="badge bg-primary">Администратор</span>
                                @else
                                    <span class="badge bg-secondary">Пользователь</span>
                                @endif
                            </div>
                            <div class="col-md-6 text-md-end">
                                <a href="{{route('profile.edit')}}" class="btn btn-warning">Редактировать профиль</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

