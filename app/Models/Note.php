<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Note
 *
 * @property $id
 * @property $title
 * @property $description
 * @property $author
 * @property $created_at
 * @property $updated_at
 * @property $images
 * @property $tags
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Note extends Model
{
    
    static $rules = [
		'title' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title','description','author','images','tags'];



}
