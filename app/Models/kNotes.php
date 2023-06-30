<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kNotes extends Model
{
    use HasFactory;

    protected $table = 'knotes';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
