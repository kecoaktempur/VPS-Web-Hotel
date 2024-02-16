<?php

namespace App\Http\Controllers;

use App\Models\CurrentTransaction;
use App\Models\PastTransaction;
use App\Models\Room;
use App\Models\Type;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function indexCurrent()
    {
        $currentTransactions = CurrentTransaction::all();
        $rooms = Room::all();
        $types = Type::all();
        return view('admin.transaction-current.index', compact('currentTransactions', 'rooms', 'types'));
    }

    public function indexPast()
    {
        $pastTransactions = PastTransaction::all();
        $rooms = Room::all();
        $types = Type::all();
        return view('admin.transaction-past.index', compact('pastTransactions', 'rooms', 'types'));
    }

    public function create()
    {
        $types = Type::all();
        return view('admin.transaction.create', compact('types'));
    }

    public function store(Request $request)
    {

    }

    public function showCurrent($id)
    {
        $transaction = CurrentTransaction::findOrFail($id);
        $rooms = Room::all();
        $types = Type::all();
        return view('admin.transaction.show', compact('transaction', 'rooms', 'types'));
    }

    public function showPast($id)
    {
        $transaction = PastTransaction::findOrFail($id);
        $rooms = Room::all();
        $types = Type::all();
        return view('admin.transaction.show', compact('transaction', 'rooms', 'types'));
    }

    public function edit($id)
    {
        $transaction = CurrentTransaction::findOrFail($id);
        $types = Type::all();
        return view('admin.transaction.edit', compact('transaction', 'types'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'type_id' => 'required',
                'name' => 'required',
                'start_date' => 'required|before:end_date',
                'end_date' => 'required|after:start_date',
            ],
            [
                'type_id.required' => 'Type can\'t be empty!',
                'name.required' => 'Name can\'t be empty!',
                'start_date.required' => 'Start date can\'t be empty!',
                'start_date.before' => 'Date is invalid!',
                'end_date.required' => 'End date can\'t be empty!',
                'end_date.after' => 'Date is invalid!'
            ]
        );

        $start_date = $request->start_date;
        $end_date = $request->end_date;
        $room = Room::where('type_id', $request->type_id)->whereNotIn('id', function ($query) use ($start_date, $end_date) {
            $query->select('room_id')
                ->from('current_transactions')
                ->where(function ($q) use ($start_date, $end_date) {
                    $q->where(function ($inner) use ($start_date, $end_date) {
                        $inner->where('start_date', '<', $end_date)
                            ->where('end_date', '>', $start_date);
                    })
                    ->orWhere(function ($inner) use ($start_date) {
                        $inner->where('start_date', '<=', $start_date)
                            ->where('end_date', '>=', $start_date);
                    })
                    ->orWhere(function ($inner) use ($start_date, $end_date) {
                        $inner->where('start_date', '>=', $start_date)
                            ->where('end_date', '<=', $end_date);
                    });
                });
        })->first();    

        CurrentTransaction::findOrFail($id)->update([
            'room_id' => $room->id,
            'name' => $request->name,
            'start_date' => $start_date,
            'end_date' => $end_date,
            'notes' => $request->notes !== null ? $request->notes : null
        ]);

        return redirect('/admin/transaction');
    }

    public function destroyCurrent($id)
    {
        $transaction = CurrentTransaction::findOrFail($id);
        $transaction->delete();
        return redirect('/admin/transaction/current');
    }

    public function destroyPast($id)
    {
        $transaction = PastTransaction::findOrFail($id);
        $transaction->delete();
        return redirect('/admin/transaction/past');
    }

    public function checkout(Request $request, $id)
    {

    }
}
