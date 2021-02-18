<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function dashboard(){


        $posts = Post::where('users_id', Auth::id())->orderBy('id')->get();




        return view('site.dashboard', compact('posts'));

    }

    public function logout()
    {
        Auth::logout();
        return  redirect()->route("home");
    }
}
