<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function post()
    {

        return $this->hasMany(Post::class);

        // este usuário pode ter vários posts
    }

    public function following()
    {
        return $this->belongsToMany(User::class, 'friends', 'follower_id', 'followed_id');
    }

    // Relação de quem segue o usuário
    public function followers()
    {
        return $this->belongsToMany(User::class, 'friends', 'followed_id', 'follower_id');
    }

    // Um usuário pode ter muitos comentários
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function detail()
    {

        return $this->hasOne(user_detail::class);
    }
}
