<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display the blog listing page.
     * TODO: Replace with real Post model query when ready.
     */
    public function index()
    {
        // $posts = \App\Models\Post::latest('published_at')->paginate(9);
        $posts = [];

        return view('blog', compact('posts'));
    }
}
