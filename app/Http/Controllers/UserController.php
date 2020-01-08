<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
class UserController extends Controller
{
    public function index(){
    	// $user = Auth::user()->name;
    	// $name = json_encode($user);
    	// return [
    	// 	'name' => $user
    	// ];
    	// return $user;
    	return Auth::user();
    }
}
