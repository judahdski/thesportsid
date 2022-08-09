<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'slug',
        'title',
        'excerpt',
        'image',
        'body_news',
    ];

    protected $with = ['category'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
