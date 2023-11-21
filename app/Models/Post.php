<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'url',
        'image_url',
        'category_id',
        'tags',
        'publication_date',
        'rating',
        'price',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}