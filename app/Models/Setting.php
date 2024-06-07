<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Setting
 *
 * @property $id
 * @property $company_name
 * @property $location
 * @property $logo
 * @property $description
 * @property $color_primary
 * @property $color_secondary
 * @property $color_tertiary
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Setting extends Model
{
    
    static $rules = [
		'company_name' => 'required',
		'location' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['company_name','location','logo','description','color_primary','color_secondary','color_tertiary'];



}
