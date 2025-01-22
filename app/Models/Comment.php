<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function post()
    {

        return $this->belongsTo(Post::class);

        // cada comentário pertence a um post
    }

    public function user()
    {

        return $this->belongsTo(User::class);

        // cada comentário pertence a um usuário
    }
}
