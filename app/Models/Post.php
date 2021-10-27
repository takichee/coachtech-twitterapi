<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user()
    {
        return $this->belogsTo(User::class);
    }

    protected $fillable = [
        'body',
        'user_id'
    ];
}
