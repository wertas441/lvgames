@extends('layouts.appwhithout')

@section('title', 'Обратиться в поддержку')

@section('content')
    <div class="d-flex justify-content-center align-items-center vh-100 backOfLogin" style="background-image: url('{{ asset('images/backofgames4.jpg') }}');">
        <div class="card shadow-sm w-100" style="max-width: 400px;">
            <div class="card-body content rounded-1" style="height: 530px; ">
                <h2 class="card-title text-center text-white">Создать вопрос в поддержку</h2>
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
                    @csrf
                    <div class="mb-3">
                        <label for="subject" class="form-label text-white">Тема вашего обращения</label>
                        <textarea name="subject" id="subject" class="form-control" rows="3" placeholder="От 3 до 55 символов" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label text-white">Отзыв</label>
                        <textarea name="message" id="message" class="form-control" rows="7" placeholder="От 15 до 250 символов" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-success w-100">Отправить запрос</button>
                </form>
            </div>
        </div>
    </div>

@endsection
