<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Type;

class TypeController extends Controller
{
    public function userIndex()
    {
        $types = Type::all();
        return view('user.type.index', compact('types'));
    }

    public function available(Request $request)
    {
        if ($request->ajax()) {
            $start_date = $request->start_date;
            $end_date = $request->end_date;

            if ($start_date < $end_date) {
                $availableRooms = Room::whereNotIn('id', function ($query) use ($start_date, $end_date) {
                    $query->select('room_id')
                        ->from('current_transactions')
                        ->where(function ($q) use ($start_date, $end_date) {
                            $q->where(function ($inner) use ($start_date) {
                                $inner->where('start_date', '<=', $start_date)
                                    ->where('end_date', '>', $start_date);
                            })
                                ->orWhere(function ($inner) use ($end_date) {
                                    $inner->where('start_date', '<', $end_date)
                                        ->where('end_date', '>=', $end_date);
                                })
                                ->orWhere(function ($inner) use ($start_date, $end_date) {
                                    $inner->where('start_date', '>=', $start_date)
                                        ->where('end_date', '<=', $end_date);
                                });
                        });
                })->get();

                $availableTypes = $availableRooms->pluck('type_id')->unique();
                $roomPerTypes = $availableRooms->groupBy('type_id')->map->count();

                return response()->json([
                    'availablerooms' => $availableRooms,
                    'availabletypes' => $availableTypes,
                    'roompertypes' => $roomPerTypes,
                ]);
            }
        }
    }

    public function userShow($id)
    {
    }

    public function index()
    {
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}
