<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Data
 *
 * @property $id
 * @property $user_id
 * @property $title
 * @property $content
 * @property $type
 * @property $visibility
 * @property $origin
 * @property $meaning
 * @property $example
 * @property $location
 * @property $start_time
 * @property $end_time
 * @property $created_at
 * @property $updated_at
 *
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Data extends Model
{
  use HasFactory;

  static $rules = [
    'user_id' => 'required',
    'title' => 'required',
    'content' => 'required',
    'type' => 'required',
  ];

  protected $perPage = 20;

  /**
   * Attributes that should be mass-assignable.
   *
   * @var array
   */
  protected $fillable = ['user_id', 'title', 'content', 'type', 'visibility', 'origin', 'meaning', 'example', 'location', 'start_time', 'end_time'];


  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasOne
   */
  public function user()
  {
    return $this->hasOne('App\Models\User', 'id', 'user_id');
  }
}
