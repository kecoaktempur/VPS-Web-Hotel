<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Review;
use App\Models\ReviewPhoto;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::all();
        return view('admin.review.index', compact('reviews'));
    }

    public function store(Request $request)
    {
        if ($request->ajax()) {
            // Create a new review
            $review = Review::create([
                'name' => $request->name,
                'message' => $request->message,
                'rating' => $request->rating
            ]);

            if ($request->hasFile('photos')) {
                foreach ($request->file('photos') as $photo) {
                    $fileName = $photo->getClientOriginalName();
                    $photo->move(public_path('img'), $fileName);
                    $photoModel = Photo::create(['name' => $fileName]);
                    ReviewPhoto::create([
                        'review_id' => $review->id,
                        'photo_id' => $photoModel->id
                    ]);
                }
            }

            return response()->json(['status' => 'OK']);
        }
    }

    public function show($id)
    {
        $review = Review::findOrFail($id);
        $photos = Photo::join('review_photo', 'photos.id', '=', 'review_photo.photo_id')
                ->where('review_photo.review_id', $id)
                ->get();
        return view('admin.review.show', compact('review', 'photos'));
    }

    public function destroy($id)
    {
        $review = Review::findOrFail($id);
        $review->delete();
        return redirect('/admin/review');
    }
}
