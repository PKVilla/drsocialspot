<?php

namespace App\Http\Controllers;
use App\Post;
use Auth;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(request $request){
    	$userid = Auth::user()->id;
    	$rules = array(
    		'post' => 'required'
    	);
    	$this->validate($request, $rules);
    	$newPost = new Post;
    	$newPost->post = $request->post;
    	$newPost->user_id = $userid;
    	$newPost->save();
    	return redirect('home');
    }

    public function myPosts(){
        return view('mypost',array('user'=>Auth::user(),'posts'=>Post::where('user_id', '=',auth()->id())->get())); 
    }
}
