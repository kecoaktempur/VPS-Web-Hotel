<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Type;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        $types = Type::all();
        return view('admin.room.index', compact('rooms', 'types'));
    }

    public function create()
    {
        $types = Type::all();
        return view('admin.room.create', compact('types'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate(
            [
                'room_number' => 'required',
                'type_id' => 'required|gt:0',
            ],
            [
                'room_number.required' => 'Room number can\'t be empty!',
                'type_id.required' => 'Type can\'t be empty',
                'type_id.gt' => 'Please select a type!'
            ]
        );

        Room::create([
            'room_number' => $request->room_number,
            'type_id' => $request->type_id,
            'single_bed' => $request->single_bed,
            'king_bed' => $request->king_bed,
            'queen_bed' => $request->queen_bed,
            'dispenser' => $request->dispenser == 'on' ? true : false,
            'magic_jar' => $request->magic_jar == 'on' ? true : false,
            'rak_piring' => $request->rak_piring == 'on' ? true : false,
            'alat_makan' => $request->alat_makan == 'on' ? true : false,
            'meja_makan' => $request->meja_makan == 'on' ? true : false,
            'dapur' => $request->dapur == 'on' ? true : false,
            'living_room' => $request->living_room == 'on' ? true : false,
            'microwave' => $request->microwave == 'on' ? true : false,
            'kulkas' => $request->kulkas == 'on' ? true : false,
            'shower' => $request->shower == 'on' ? true : false,
            'waterheater' => $request->waterheater == 'on' ? true : false,
            'wastafel' => $request->wastafel == 'on' ? true : false,
            'closet' => $request->closet == 'on' ? true : false,
            'bathtub' => $request->bathtub == 'on' ? true : false,
            'ac' => $request->ac == 'on' ? true : false,
            'tv' => $request->tv == 'on' ? true : false,
        ]);

        return redirect('/admin/room');
    }

    public function edit($id)
    {
        $types = Type::all();
        $room = Room::findOrFail($id);
        return view('admin.room.edit', compact('types', 'room'));
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $request->validate(
            [
                'room_number' => 'required',
                'type_id' => 'required|gt:0',
            ],
            [
                'room_number.required' => 'Room number can\'t be empty!',
                'type_id.required' => 'Type can\'t be empty',
                'type_id.gt' => 'Please select a type!'
            ]
        );

        Room::findOrFail($id)->update([
            'room_number' => $request->room_number,
            'type_id' => $request->type_id,
            'single_bed' => $request->single_bed,
            'king_bed' => $request->king_bed,
            'queen_bed' => $request->queen_bed,
            'dispenser' => $request->dispenser == 'on' ? true : false,
            'magic_jar' => $request->magic_jar == 'on' ? true : false,
            'rak_piring' => $request->rak_piring == 'on' ? true : false,
            'alat_makan' => $request->alat_makan == 'on' ? true : false,
            'meja_makan' => $request->meja_makan == 'on' ? true : false,
            'dapur' => $request->dapur == 'on' ? true : false,
            'living_room' => $request->living_room == 'on' ? true : false,
            'microwave' => $request->microwave == 'on' ? true : false,
            'kulkas' => $request->kulkas == 'on' ? true : false,
            'shower' => $request->shower == 'on' ? true : false,
            'waterheater' => $request->waterheater == 'on' ? true : false,
            'wastafel' => $request->wastafel == 'on' ? true : false,
            'closet' => $request->closet == 'on' ? true : false,
            'bathtub' => $request->bathtub == 'on' ? true : false,
            'ac' => $request->ac == 'on' ? true : false,
            'tv' => $request->tv == 'on' ? true : false,
        ]);

        return redirect('/admin/room');
    }

    public function destroy($id)
    {
        $room = Room::findOrFail($id);
        $room->delete();
        return redirect('/admin/room');
    }
}
