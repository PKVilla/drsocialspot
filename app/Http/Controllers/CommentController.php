<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Comment;
use App\Post;
use App\User;
use Auth;
class CommentController extends Controller
{
    public function saveComment(Request $request){
    	$comment = new Comment;
    	$comment->comment = $request->get('comment');
        $comment->user()->associate($request->user());
    	// dd($comment);
        $post = Post::find($request->get('post_id'));
        $post->comments()->save($comment);
        dd($post);
        return back();
    }
}
