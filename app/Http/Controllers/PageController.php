<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Review;
use App\Models\Type;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $types = Type::all();
        $reviews = Review::orderBy('created_at', 'desc')->limit(6)->get();
        return view('user.home', compact('types', 'reviews'));
    }

    public function gallery()
    {
        $photos = Photo::all();
        return view('user.gallery', compact('photos'));
    }
}
