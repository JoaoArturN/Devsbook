<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function renderPosts()  // / renderizar home
    {

        $userProfile = User::find(Auth::user()->id);

        $posts = Post::with('user', 'comment.user')->orderBy('created_at', 'desc')->get();

        return view('index', ['posts' => $posts, 'userProfile' => $userProfile]);
    }
}
