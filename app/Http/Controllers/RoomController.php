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

    }

    public function edit($id)
    {
        $types = Type::all();
        return view('admin.room.edit', compact('types'));
    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {
        $room = Room::findOrFail($id);
        $room->delete();
        return redirect('/admin/room');
    }
}
