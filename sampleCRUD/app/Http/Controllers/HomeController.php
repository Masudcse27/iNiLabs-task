<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function index() {
        $posts = Post :: orderBy ('id' , 'desc') ->with('user') -> get();
        return view('home' , ['posts' => $posts]);
    }
}
