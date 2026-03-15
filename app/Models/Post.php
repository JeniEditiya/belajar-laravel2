<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // relasi ke user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // relasi ke category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // relasi ke comments
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    // relasi ke tags
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
