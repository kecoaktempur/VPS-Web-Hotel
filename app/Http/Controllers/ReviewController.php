<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::paginate(10);
        return view('admin.review.index', compact('reviews'));
    }

    public function store(Request $request)
    {
        if ($request->ajax()) {
            Review::create([
                'name' => $request->name,
                'message' => $request->message,
                'rating' => $request->rating
            ]);

            return response()->json(['status' => 'OK']);
        }
    }

    public function destroy($id)
    {
        $review = Review::findOrFail($id);
        $review->delete();
        return redirect('/admin/review');
    }
}
