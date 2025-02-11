<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'body',
        'user_id',
    ];

    public function comment()
    {

        return $this->hasMany(Comment::class); // / este post pode possuir vários comentários
    }

    public function user()
    {

        return $this->belongsTo(User::class); // este post pertence a um usuario
    }
}
