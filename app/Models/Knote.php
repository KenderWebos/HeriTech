<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Knote
 *
 * @property $id
 * @property $user_id
 * @property $title
 * @property $content
 * @property $created_at
 * @property $updated_at
 * @property $tags
 * @property $attachments
 * @property $reminder
 * @property $status
 *
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Knote extends Model
{
    
    static $rules = [
		'user_id' => 'required',
		'title' => 'required',
		'content' => 'required',
		'status' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','title','content','tags','attachments','reminder','status'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    

}
