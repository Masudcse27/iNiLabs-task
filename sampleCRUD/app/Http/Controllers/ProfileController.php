<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class ProfileController extends Controller
{
    public function index() {
        $userId=auth()->user()->id;
        $posts = Post ::where('user_id',$userId)->orderBy ('id' , 'desc') ->get();
        return view('profile',['posts' => $posts]);
    }
}
