<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class HomeController extends Controller
{
    public function index(){
        $posts = Post::all()->sortByDesc('created_at')->take(6);
        return view ('index', compact('posts'));
    }

    public function store(Request $request)
    {

    }
}
