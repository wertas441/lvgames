<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\View\View;
use function Pest\Laravel\get;

class TicketController extends Controller
{
    public function index()
    {
        $allTickets = Ticket::where('user_id', auth() ->id()) -> get();
        return view('ticket.index', compact('allTickets'));
    }

    public function create(): View
    {
        return view('ticket.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'subject' => 'required|min:3|max:55|string',
            'message' => 'required|min:15|max:250|string',

        ]);

        Ticket::create([
            'user_id' => auth() -> id(),
            'subject' => $validatedData['subject'],
            'message' => $validatedData['message'],
            'status' => 'open',

        ]);

        return redirect()->route('support-index') -> with('success', 'Ваш вопрос был передан в нашу службу');


    }

    public function show($id)
    {
        $ticket = Ticket::with('replies') -> findOrFail($id);

        return view('ticket.show', compact('ticket'));
    }


    public function update(Request $request, $id){
        $ticket = Ticket::findOrFail($id);

        $validatedData = $request->validate([
            'message' => 'required|min:15|max:250|string',
        ]);

        $ticket->update([

        ]);
    }
}
