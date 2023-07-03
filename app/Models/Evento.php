<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    protected $fillable = ['fecha', 'descripcion', 'titulo'];

    public function tipo_evento()
    {
        return $this->belongsTo(TipoEvento::class);
    }
}
