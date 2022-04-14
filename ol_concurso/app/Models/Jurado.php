<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurado extends Model
{
    use HasFactory;
    protected $fillable = ['nombres_jurado','apellidos_jurado','numero_jurado','dni_jurado'];
    protected $table = 'jurados';
}
