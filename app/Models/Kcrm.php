<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kcrm extends Model
{
    use HasFactory;


protected $fillable = [
    'idKCRM',
    'Cedula',
    'Nombre',
    'ID_Venta',
    'Fecha_Venta',
    'Descripcion',
    'Fecha_Gestion',
    'Gestor',
];
}