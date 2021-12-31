<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class producto extends Model
{
    use HasFactory;
    protected $table = 'productos';
    use SoftDeletes;

    protected $fillable = [
        'nombre',
        'precio',
        'stock',
        'estado',  
        'categoria_id',  
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class,'categoria_id', 'id');
    }
}
