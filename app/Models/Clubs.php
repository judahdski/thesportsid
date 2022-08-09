<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clubs extends Model
{
    use HasFactory;

    protected $fillable = [
        'categories_id',
        'image',
        'full_name',
        'short_name',
        'body_desc',
        'founded',
        'owner',
        'head_coach',
        'league'
    ];

    protected $guarded = ['id'];

    public function scopeSearch($query)
    {
        if (request('search_bar')) {
            return $query->where('full_name', 'like', '%'.request('search_bar').'%')
                    ->orWhere('short_name', 'like', '%'.request('search_bar').'%');
        }
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
