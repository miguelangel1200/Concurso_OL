<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    use HasFactory;
    protected $fillable = ['nombres_par','apellidos_par','dni_par','fecha_nac_par','categoria_par','foto_dni','edad_par','num_celular','academia','correo_par','sexo_par','nombre_apoderado','apellido_apoderado','dni_apoderado','estado'];
    protected $table = 'participantes';
}
