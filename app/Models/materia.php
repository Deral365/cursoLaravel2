<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class materia extends Model
{
    use HasFactory;
    protected $table ="materias";
    
    protected $fillable =[
        'nombre',
        'semestre',
        'especialidad'
        
    ];
}
