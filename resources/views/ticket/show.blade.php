@extends('layouts.app')

@section('title', $ticket -> subject)

@section('content')
    <div class="container">

        <!-- Информация о тикете -->
        <div class="card mb-3 mt-3">
            <div class="card-header">
                <h4>Тема: {{ $ticket->subject }}</h4>
                <small>Статус: <strong>{{ $ticket->status == 'open' ? 'Открыт' : 'Закрыт' }}</strong></small>
            </div>
            <div class="card-body">
                <p><strong>Сообщение:</strong></p>
                <p>{{ $ticket->message }}</p>
            </div>
        </div>

        <!-- Список ответов -->
        <div class="card mb-3">
            <div class="card-header">
                <h5>Ответы</h5>
            </div>
            <div class="card-body">
                @if ($ticket->replies->isEmpty())
                    <p>Ответов пока нет.</p>
                @else
                    @foreach ($ticket->replies as $reply)
                        <div class="reply mb-2">
                            <p><strong>{{ $reply->user->name }}</strong> ответил:</p>
                            <p>{{ $reply->message }}</p>
                            <small class="text-muted">{{ $reply->created_at->format('d.m.Y H:i') }}</small>
                        </div>
                        <hr>
                    @endforeach
                @endif
            </div>
        </div>

        <!-- Форма для добавления нового ответа -->
        <div class="card">
            <div class="card-header">
                <h5>Добавить ответ</h5>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="message">Сообщение</label>
                        <textarea name="message" id="message" class="form-control" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Отправить ответ</button>
                </form>
            </div>
        </div>
    </div>
@endsection

