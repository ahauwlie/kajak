<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;

class PostsController extends Controller
{
    public function index()
    {
        // $posts = Posts::all()->toArray();
        $posts = Posts::orderBy('created_at', 'DESC')->paginate(1);
        return view('home', compact('posts'));
    }
}
