<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Discussion;
use App\Channel;
use View;

class ForumsController extends Controller
{
    public function index() {

        $discussions = Discussion::orderBy('created_at','desc')->paginate(3);
        return view('forum', ['discussions' => $discussions]);
    }

    public function channel($slug) {
        $channel = Channel::where('slug',$slug)->first();
        return view('channel')->with('discussions',$channel->discussions);


    }
}
