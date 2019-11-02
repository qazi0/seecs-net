<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Discussion;
use Auth;
use Session;
use App\Reply;
class DiscussionsController extends Controller
{
    public function create() {
        return view('discuss');
    }

    public function store()
    {
        $r = request();
        $this->validate($r, [
            'title' => 'required',
            'channel_id' => 'required',
            'content' => 'required'
        ]);

        $discussion = Discussion::create([
            'title' => $r->title,
            'channel_id' => $r->channel_id,
            'content' => $r->content,
            'user_id' => Auth::id(),
            'slug' => str_slug($r->title)
        ]);

        $discussion->save();

        toastr()->success('Discussion created successfully.');

        return redirect()->route('discussion',['slug' => $discussion->slug]);
    }

    public function show($slug) {
        $discussion = Discussion::where('slug',$slug)->first();
        $best_answer = $discussion->replies()->where('best_answer',1)->first();
        return view('discussions.show')->with('d',$discussion)->with('best_answer',$best_answer);

    }

    public function reply($id) {
        $d = Discussion::find($id);
        $reply = Reply::create([
            'user_id' => Auth::id(),
            'content' => request()->reply,
            'discussion_id' => $id
        ]);

        toastr()->success('Replied to discussion.');

        return redirect()->back();

    }
}
