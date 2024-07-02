<?php

namespace App\Http\Controllers;
use App\Reviews;

class ReviewsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index() {
        $reviews = Reviews::all();
        return response()->json($reviews);
    }
}
