<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reply;
use App\Like;
use Auth;
use Session;
class RepliesController extends Controller
{
    public function like($id) {

        Like::create([
            'reply_id' => $id,
            'user_id' => Auth::id()
        ]);


        toastr()->success('You liked this reply.');

        return redirect()->back();
    }

    public function unlike($id){

        $like = Like::where('reply_id',$id)->where('user_id',Auth::id())->first();
        $like->delete();


        toastr()->success('You unliked this reply.');

        return redirect()->back();

    }

    public function best_answer($id) {
        $reply = Reply::find($id);
        $reply->best_answer = 1;
        $reply->save();
        toastr()->success('Reply marked as best.');

        return redirect()->back();
    }

}
