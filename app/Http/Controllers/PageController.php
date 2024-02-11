<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $types = Type::all();
        return view('user.home', compact('types'));
    }
}
