<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoModulo
 *
 * @property $id
 * @property $name
 * @property $slug
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TipoModulo extends Model
{
    
    static $rules = [
		'name' => 'required',
		'slug' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','slug'];



}
