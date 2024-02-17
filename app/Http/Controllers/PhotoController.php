<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Type;
use App\Models\TypePhoto;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index()
    {
        $photos = Photo::all();
        $types = Type::all();
        $typephotos = TypePhoto::all();
        return view('admin.photo.index', compact('photos', 'types', 'typephotos'));
    }

    public function create()
    {
        $types = Type::all();
        return view('admin.photo.create', compact('types'));
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'photo' => 'required|mimes:jpg,jpeg,png',
            ],
            [
                'photo.required' => 'Photo can\'t be empty!',
                'photo.mimes' => 'Allowed extensions are .jpg, .jpeg, and .png!',
            ]
        );

        $file = $request->file('photo');
        $ext = $file->extension();
        $name = date('ymdhis') . "." . $ext;
        $file->storeAs('public/img', $name);

        $photo = Photo::create([
            'name' => $name,
        ]);

        if ($request->type) {
            TypePhoto::create([
                'type_id' => $request->type,
                'photo_id' => $photo->id
            ]);
        }

        return redirect('/admin/photo');
    }

    public function destroy($id)
    {
        $photo = Photo::findOrFail($id);
        $photo->delete();
        return redirect('/admin/photo');
    }
}
