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
        dd($request);
        $data = Message::create([
            'type' => $request->type,
            'firstname' => $request->nameContact,
            'lastname' => $request->lastnameContact,
            'title' => $request->titleProject,
            'email' => $request->emainContact,
            'fileone' => $request->fileProject1,
            'filetwo' => $request->fileProject2,
            'message' => $request->messageContact,
        ]);
    }
}
