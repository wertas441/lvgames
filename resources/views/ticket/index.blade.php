@extends('layouts.app')

@section('title', 'Поддержка')

@section('content')
    <div class="container rev_block">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif


        <div class="reviews_navbar d-flex justify-content-between">
            <h1 class="text-white">Ваши обращения</h1>
                <a href="{{route('support-create')}}" class="btn btn-success mt-2" style="height: 40px;">Написать в поддержку</a>
        </div>
        <hr class="review-hr">
            @foreach ($allTickets as $ticket)
                <a href="{{route('ticket-show', $ticket -> id)}}">
                <div class="review-item p-3 mb-4 bg-dark text-white rounded">
                    <h5>{{ $ticket->subject }}</h5>
                    <p class="mb-1">{{ $ticket->message }}</p>
                    @if ($ticket-> status == 'open')
                        <div>Статус: открыт</div>
                    @elseif($ticket-> status == 'in_progress')
                        <div>Статус: В обсуждении</div>
                    @elseif($ticket-> status == 'closed')
                        <div>Статус: закрыт</div>
                    @endif
                </div>
                </a>
            @endforeach
    </div>
@endsection

