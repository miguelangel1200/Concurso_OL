<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    use HasFactory;
    protected $fillable = ['modalidad_id','categoria_ins','nombres_1','apellidos_1','dni_1','academia_1','cel_1','nombres_2','apellidos_2','dni_2','academia_2','cel_2','voucher'];
    protected $table = 'inscripciones';
}
