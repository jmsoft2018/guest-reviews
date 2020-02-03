<?php

namespace GuestReviews\Controllers;

use App\Http\Controllers\Controller;
use GuestReviews\Review;
use Illuminate\Http\Request;

class GuestReviewController extends Controller
{
    public function index(Request $request){
        $data = [];
        $data['success'] = $request->success;
        $reviews = Review::all();
        $data['reviews'] = $reviews;
        return view('guest-reviews::index', $data);
    }

    public function store(Request $request)
    {
        $review = new Review();

        $this->validate(
            $request,
            ['author' => 'required', 'text' => 'required'],
            [
                'author.required' => 'Введите имя автора!',
                'text.required' => 'Введите текст сообщения!',
            ]);

        $review->author = $request->author;
        $review->text = $request->text;

        $review->save();

        return redirect()->route('guest-reviews', ['success'=>true]);
    }

    public function destroy($id)
    {
        $review = Review::find($id);

        $review->delete();

        return redirect()->route('guest-reviews', ['success'=>true]);
    }
}