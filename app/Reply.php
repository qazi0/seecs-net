<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
class Reply extends Model
{
    protected $fillable = ['content','discussion_id','user_id'];

    public function discussion() {
        $this->belongsTo('App\Discussion');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function likes() {
        return $this->hasMany('App\Like');
    }
    
    public function is_liked(){
        $id = Auth::id();
        $likers = array();
        foreach( $this->likes as $like):
            array_push($likers, $like->user_id);
        endforeach;

        if (in_array($id,$likers)) {
            return true;
        } else {
            return false;
        }
        
    }
}
