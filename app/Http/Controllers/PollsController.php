<?php

namespace App\Http\Controllers;

use App\Poll;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PollsController extends Controller
{
    public function index()
    {
        $polls = Poll::latest()->get();

        if(Request()->wantsJson())
        {
            Return response()->json($polls,200);
        }

        return view('Polls.index',compact('polls'));

    }

    public function show(Poll $poll)
    {
        if(Request()->wantsJson())
        {
            Return response()->json($poll,200);
        }

        return view('Polls.show',compact('poll'));
    }
}
