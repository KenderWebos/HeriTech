<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Evento
 *
 * @property $id
 * @property $fecha
 * @property $titulo
 * @property $descripcion
 * @property $duracion
 * @property $ubicacion
 * @property $latitud
 * @property $longitud
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Evento extends Model
{
  use HasFactory;

  static $rules = [
    'fecha' => 'required',
    'titulo' => 'required',
    'descripcion' => 'required',
  ];

  protected $perPage = 20;

  /**
   * Attributes that should be mass-assignable.
   *
   * @var array
   */
  protected $fillable = ['fecha', 'titulo', 'descripcion', 'duracion', 'ubicacion', 'latitud', 'longitud'];
}
