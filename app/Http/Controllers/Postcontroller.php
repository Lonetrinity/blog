<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Postcontroller extends Controller
{
    public function post(){
        return view('posts.post');
    }
}
