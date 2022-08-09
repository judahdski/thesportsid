<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['slug', 'name'];

    public function news()
    {
        return $this->hasMany(News::class);
    }

    public function clubs()
    {
        return $this->hasMany(Clubs::class);
    }
    
    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
}
