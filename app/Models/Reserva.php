<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $fillable = ['mesa_id', 'cliente_nombre', 'cliente_email', 'cliente_telefono', 'fecha_hora', 'num_personas'];

    public function mesa()
    {
        return $this->belongsTo(Mesa::class);
    }
}
