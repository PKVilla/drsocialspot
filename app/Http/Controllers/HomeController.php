<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;
use App\Post;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user()->name;
        $posts = DB::table('posts')
            ->leftJoin('users', 'posts.user_id', '=', 'users.id')
            ->leftJoin('likes', 'likes.user_id', '=', 'users.id')
            ->get();
            // dd($posts);
        $sum = DB::table('likes')->count();
        return view('home', compact('user','posts', 'sum'));
    }
}
