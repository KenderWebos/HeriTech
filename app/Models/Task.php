<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'due_date',
        'designated_time',
        'type',
        'priority',
        'status',
        'description',
        'assigned_to',
    ];

    // Definir constantes para tipos de tarea
    const TYPE_EXERCISE = 'exercise';
    const TYPE_WORK = 'work';
    const TYPE_MEETING = 'meeting';
    // ... otras constantes de tipos de tareas

    // Definir constantes para prioridades
    const PRIORITY_LOW = 'low';
    const PRIORITY_MEDIUM = 'medium';
    const PRIORITY_HIGH = 'high';

    // Definir constantes para estados de tarea
    const STATUS_PENDING = 'pending';
    const STATUS_IN_PROGRESS = 'in_progress';
    const STATUS_COMPLETED = 'completed';

    // Relación: una tarea puede ser asignada a un usuario
    public function assignedUser()
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }
}
