<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proyectol_model extends Model
{
    use HasFactory;


    protected $table='proyectol';  //agregamos
    protected $fillable=[
        'nombre',
        'objetivo',
        'caracteristicas',
        'resultado'

    ];                
}
