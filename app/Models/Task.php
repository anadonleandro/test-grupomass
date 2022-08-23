<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $table = 'tasks';//nombre de la tabla
    protected $primaryKey = 'id';//clave primaria de la tabla

    protected $fillable = [//campos llenables de la tabla
        'titulo',
        'descripcion'
    ];

    public function setTituloAttribute($value)
    {//GUARDA CAMPO EN MAYUSCULA
        $this->attributes['titulo'] = strtoupper($value);
    }
    public function setDescripcionAttribute($value)
    {//GUARDA CAMPO EN MAYUSCULA
        $this->attributes['descripcion'] = strtoupper($value);
    }
}
