<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'description', 'is_active'
    ];
    public function comments()
    {
        return $this->hasMany(Comment::class); // one-many
    }
    public function tags()
    {
        // return $this->belongsToMany(Tag::class); //many-many  //added data without created_at and updated_at column
        return $this->belongsToMany(Tag::class)->withTimestamps(); //many-many  //added data with timestamps
    }
}
