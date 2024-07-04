<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;

    protected $fillable = ['mesa_id', 'fecha', 'hora', 'reservado'];

    public function mesa()
    {
        return $this->belongsTo(Mesa::class);
    }
}
