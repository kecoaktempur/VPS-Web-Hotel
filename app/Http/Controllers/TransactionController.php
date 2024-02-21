<?php

namespace App\Http\Controllers;

use App\Models\CurrentTransaction;
use App\Models\PastTransaction;
use App\Models\Room;
use App\Models\Type;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function indexCurrent()
    {
        $currentTransactions = CurrentTransaction::orderBy('end_date')->get();
        $rooms = Room::all();
        $types = Type::all();
        return view('admin.transaction-current.index', compact('currentTransactions', 'rooms', 'types'));
    }

    public function indexPast()
    {
        $pastTransactions = PastTransaction::orderByDesc('check_out_date')->get();
        $rooms = Room::all();
        $types = Type::all();
        return view('admin.transaction-past.index', compact('pastTransactions', 'rooms', 'types'));
    }

    public function create()
    {
        $rooms = Room::all();
        $types = Type::all();
        return view('admin.transaction-current.create', compact('types', 'rooms'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate(
            [
                'name' => 'required',
                'start_date' => 'required|before:end_date',
                'end_date' => 'required|after:start_date',
            ],
            [
                'name.required' => 'Name can\'t be empty!',
                'start_date.required' => 'Start date can\'t be empty!',
                'start_date.before' => 'Date is invalid!',
                'end_date.required' => 'End date can\'t be empty!',
                'end_date.after' => 'Date is invalid!'
            ]
        );

        $roomIds = [];
        foreach ($request->all() as $key => $value) {
            if (strpos($key, 'room') === 0 && $value === 'on') {
                $roomId = substr($key, 4);
                $roomIds[] = $roomId;
            }
        }

        foreach ($roomIds as $roomId) {
            CurrentTransaction::create([
                'name' => $request->name,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'room_id' => $roomId,
                'notes' => $request->notes
            ]);
        }

        return redirect('/admin/transaction/current');
    }

    // public function showCurrent($id)
    // {
    //     $transaction = CurrentTransaction::findOrFail($id);
    //     $rooms = Room::all();
    //     $types = Type::all();
    //     return view('admin.transaction.show', compact('transaction', 'rooms', 'types'));
    // }

    // public function showPast($id)
    // {
    //     $transaction = PastTransaction::findOrFail($id);
    //     $rooms = Room::all();
    //     $types = Type::all();
    //     return view('admin.transaction.show', compact('transaction', 'rooms', 'types'));
    // }

    public function edit($id)
    {
        $transaction = CurrentTransaction::findOrFail($id);
        $types = Type::all();
        return view('admin.transaction-current.edit', compact('transaction', 'types'));
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $request->validate(
            [
                'name' => 'required',
                'start_date' => 'required|before:end_date',
                'end_date' => 'required|after:start_date',
            ],
            [
                'name.required' => 'Name can\'t be empty!',
                'start_date.required' => 'Start date can\'t be empty!',
                'start_date.before' => 'Date is invalid!',
                'end_date.required' => 'End date can\'t be empty!',
                'end_date.after' => 'Date is invalid!',
            ]
        );

        if ($request->check_out_date != null){
            $request->validate(
                [
                    'check_out_date' => 'after_or_equal:start_date|before_or_equal:end_date'
                ],
                [
                    'check_out_date.after_or_equal' => 'Date is invalid!',
                    'check_out_date.before_or_equal' => 'Date is invalid!'
                ]
            );
        }

        $start_date = $request->start_date;
        $end_date = $request->end_date;

        $crashingTransactions = CurrentTransaction::where('room_id', $request->room_id)->where('id', '!=', $id)
            ->where(function ($q) use ($start_date, $end_date) {
                $q->where(function ($inner) use ($start_date) {
                    $inner->where(function ($subInner) use ($start_date) {
                        $subInner->where('check_out_date', '!=', null)
                            ->where('start_date', '<=', $start_date)
                            ->where('check_out_date', '>', $start_date);
                    })->orWhere(function ($subInner) use ($start_date) {
                        $subInner->where('check_out_date', '=', null)
                            ->where('start_date', '<=', $start_date)
                            ->where('end_date', '>', $start_date);
                    });
                })->orWhere(function ($inner) use ($end_date) {
                    $inner->where(function ($subInner) use ($end_date) {
                        $subInner->where('check_out_date', '!=', null)
                            ->where('start_date', '<', $end_date)
                            ->where('check_out_date', '>=', $end_date);
                    })->orWhere(function ($subInner) use ($end_date) {
                        $subInner->where('check_out_date', '=', null)
                            ->where('start_date', '<', $end_date)
                            ->where('end_date', '>=', $end_date);
                    });
                })->orWhere(function ($inner) use ($start_date, $end_date) {
                    $inner->where(function ($subInner) use ($start_date, $end_date) {
                        $subInner->where('check_out_date', '!=', null)
                            ->where('start_date', '>=', $start_date)
                            ->where('check_out_date', '<=', $end_date);
                    })->orWhere(function ($subInner) use ($start_date, $end_date) {
                        $subInner->where('check_out_date', '=', null)
                            ->where('start_date', '>=', $start_date)
                            ->where('end_date', '<=', $end_date);
                    });
                });
            })->get();

        if ($crashingTransactions->count() > 0) {
            return back()->withErrors([
                'start_date' => 'The room is served on this date!',
                'end_date' => 'The room is served on this date!',
            ]);
        }

        CurrentTransaction::findOrFail($id)->update([
            'name' => $request->name,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'check_out_date' => $request->check_out_date,
            'notes' => $request->notes
        ]);

        return redirect('/admin/transaction/current');
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

    public function checkout($id)
    {
        $transaction = CurrentTransaction::findOrFail($id);
        if (Carbon::now()->toDateString() >= $transaction->start_date && Carbon::now()->toDateString() <= $transaction->end_date) {
            $transaction->update([
                'check_out_date' => Carbon::now()->toDateString()
            ]);
        }
        return redirect('/admin/transaction/current');
    }
}
