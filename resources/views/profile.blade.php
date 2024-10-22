@extends('layouts.app')

@section('title', 'Профиль')

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow border-0">
                    <div class="card-header" style="background-color: #2b2b2b; color: #ffffff;">
                        <h3 class="mb-0">Профиль пользователя</h3>
                    </div>
                    <div class="card-body" style="background-color: #f8f9fa;">
                        <div class="d-flex align-items-center mb-4">
                            <div class="flex-shrink-0">
                                <img src="https://via.placeholder.com/80" alt="User Avatar" class="img-fluid rounded-circle border">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h4 class="text-dark">{{ auth()->user()->name }}</h4>
                                <p class="text-muted">{{ auth()->user()->email }}</p>
                                @php
                                    $confirm = auth()->user()->email_verified_at;
                                @endphp
                                @if(!empty($confirm))
                                    <span class="badge bg-success">Почта подтверждена</span>
                                @else
                                    <span class="badge bg-danger">Почта не подтверждена</span>
                                    <div class="mt-2">
                                        <a href="{{ route('verification.notice') }}" class="btn btn-outline-primary btn-sm">Подтвердить почту</a>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <hr>

                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="text-dark">Ваш статус:</h5>
                                @if(auth()->user()->admin)
                                    <span class="badge bg-primary">Администратор</span>
                                @else
                                    <span class="badge bg-secondary">Пользователь</span>
                                @endif
                            </div>
                            <a href="{{ route('profile.edit') }}" class="btn btn-warning">Редактировать профиль</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

