<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'slug',
        'content',
        'category_id',
        'user_id',
        'published_at',
        'views',
        'status'
    ];
}
