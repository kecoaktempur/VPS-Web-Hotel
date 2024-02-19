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
        $type = Type::findOrFail($id);
        $rooms = Room::where('type_id', $id)->get();
        $otherTypes = Type::where('id', '!=', $id)->get();
        return view('user.type.show', compact('type', 'rooms', 'otherTypes'));
    }

    public function index()
    {
        $types = Type::all();
        return view('admin.type.index', compact('types'));
    }

    public function create()
    {
        return view('admin.type.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate(
            [
                'name' => 'required',
                'size' => 'required|numeric',
                'price' => 'required|numeric',
                'description' => 'required',
            ],
            [
                'name.required' => 'Name can\'t be empty!',
                'size.required' => 'Size can\'t be empty!',
                'size.numeric' => 'Size must be numeric!',
                'price.required' => 'Price can\'t be empty!',
                'price.numeric' => 'Price must be numeric!',
                'description.required' => 'Description can\'t be empty!'
            ]
        );

        Type::create([
            'name' => $request->name,
            'size' => $request->size,
            'price' => $request->price,
            'description' => $request->description,
        ]);

        return redirect('/admin/type');
    }

    public function show($id)
    {
        $type = Type::findOrFail($id);
        return view('admin.type.show', compact('type'));
    }

    public function edit($id)
    {
        $type = Type::findOrFail($id);
        return view('admin.type.edit', compact('type'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'name' => 'required',
                'size' => 'required|numeric',
                'price' => 'required|numeric',
                'description' => 'required',
            ],
            [
                'name.required' => 'Name can\'t be empty!',
                'name.unique' => 'There is already a type with the same name!',
                'size.required' => 'Size can\'t be empty!',
                'size.numeric' => 'Size must be numeric!',
                'price.required' => 'Price can\'t be empty!',
                'price.numeric' => 'Price must be numeric!',
                'description.required' => 'Description can\'t be empty!'
            ]
        );

        Type::findOrFail($id)->update([
            'name' => $request->name,
            'size' => $request->size,
            'price' => $request->price,
            'description' => $request->description,
        ]);

        return redirect('/admin/type');
    }

    public function destroy($id)
    {
        $type = Type::findOrFail($id);
        $type->delete();
        return redirect('/admin/type');
    }
}
