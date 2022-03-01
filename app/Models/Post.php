<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public function comments()
    {
        return $this->hasMany(Comment::class); // one-many
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class); //many-many
    }
}
