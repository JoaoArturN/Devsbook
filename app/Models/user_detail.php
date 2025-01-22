<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_detail extends Model
{
    protected $fillable = [
        'birthdate',
        'work',
        'avatar',
        'user_id',
        'banner',
    ];

    use HasFactory;

    public function user()
    {

        return $this->belongsTo(User::class);

        // cada usuario pode ter uma tabela no user details

    }
}
