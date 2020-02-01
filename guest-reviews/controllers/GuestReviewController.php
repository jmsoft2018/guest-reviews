<?php

namespace GuestReviews\Controllers;

use App\Http\Controllers\Controller;

class GuestReviewController extends Controller
{
    public function index(){
        return view('guest-reviews.index');
    }
}