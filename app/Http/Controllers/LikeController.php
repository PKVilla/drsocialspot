<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Like;
class LikeController extends Controller
{
    public function index(request $request){
    	$userid = Auth::user()->id;
        $checker = Like::where('user_id','=',$userid)->where('post_id','=',$request->postid)->get();
        // dd();
        if(count($checker) > 0)
        {
        return redirect('home');
        }
        else{
        $like = new Like;
        $like->user_id = $userid;
        $like->post_id = $request->postid;
        $like->like = 1;
        $like->save();
        return redirect('home');
    }
}
}
