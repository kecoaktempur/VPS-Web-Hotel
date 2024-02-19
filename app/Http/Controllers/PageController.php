<?php

namespace App\Http\Controllers;

use App\Charts\RoomAvailablePerTypeChart;
use App\Charts\RoomAvailableTodayChart;
use App\Charts\TransactionCountPerMonthChart;
use App\Models\Photo;
use App\Models\Review;
use App\Models\Type;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // user
    public function home()
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

    // admin
    public function dashboard(RoomAvailableTodayChart $roomAvailableTodayChart, RoomAvailablePerTypeChart $roomAvailablePerTypeChart, TransactionCountPerMonthChart $transactionCountPerMonthChart)
    {
        return view('admin.dashboard', 
            [
                'roomAvailableTodayChart' => $roomAvailableTodayChart->build(),
                'roomAvailablePerTypeChart' => $roomAvailablePerTypeChart->build(),
                'transactionCountPerMonthChart' => $transactionCountPerMonthChart->build()
            ]
        );
    }
}
