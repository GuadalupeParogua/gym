<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class grupo extends Model
{
    use HasFactory;
    protected $table = 'grupos';
    use SoftDeletes;

    protected $fillable = [
        'nombre',
        'dia_sem',
        'hra_ini',
        'hra_fin',
        'cupo',
        'estado',
        'instructor_id',
        'disciplina_id',
    ]; 

    public function instructor()
    {
        return $this->belongsTo(Instructor::class,'instructor_id', 'id');
    }

    public function disciplina()
    {
        return $this->belongsTo(Disciplina::class,'disciplina_id', 'id');
    }
}
