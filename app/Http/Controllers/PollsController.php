<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PollsController extends Controller
{
    public function index()
    {
        Return response()->json(Poll::get(),200);
    }
}
