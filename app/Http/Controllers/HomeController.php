<?php

namespace App\Http\Controllers;

use App\Models\Post;

class HomeController extends Controller
{
    public function renderPosts()  // / renderizar home
    {

        $posts = Post::with('user', 'comment.user')->orderBy('created_at', 'desc')->get();

        return view('index', ['posts' => $posts]);
    }
}
