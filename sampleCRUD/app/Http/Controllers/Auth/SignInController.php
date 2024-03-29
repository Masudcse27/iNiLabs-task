<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\SigninRequest;

class SignInController extends Controller
{
    public function index() {
        return view('auth.login');
    }

    public function login(SigninRequest $request){
        $data=$request->only(['email','password']);
        if(Auth::attempt($data)){
            return redirect()->intended(route('home'));
        }
        else return redirect()->route('login');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route ('home');
    }
}
