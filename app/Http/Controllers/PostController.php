<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $data  = Post::all();

        return view('post.index', compact('data'));
    }

    public function show(Post $post)
    {
        return view('post.show', ['data' => $post]);
    }

    public function create()
    {
        return view('post.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'min:8'],
            'body' => 'required',
        ]);
        Post::create([
            'title' => $request->title,
            'body' => $request->body,
        ]);

        return redirect()->route('post.index');
    }
}
