<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function createpost(Request $request)
    {

        $request->validate(
            [
                'body' => 'required|max:1000',
            ]
        );

        Post::create([
            'body' => $request->body,
            'user_id' => Auth::user()->id,
        ]);

        return redirect('/');

    }
}
