<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
   public function users()
    {
        return $this->hasMany(User::class);
    }

    public function posts()
    {
        return $this->hasManyOneThrough(Post::class, User::class);
    }
     public function videos()
    {
        return $this->hasManyOneThrough(Video::class, User::class);
    }
}
