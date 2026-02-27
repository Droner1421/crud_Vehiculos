<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vehiculo extends Model
{
    use HasFactory;
    protected $table = 'vehiculos';

    protected $fillable = [
        'marca',
        'modelo',
        'anio',
        'color',
        'placa',
        'numero_serie',
        'tipo_combustible',
        'propietario_id',
    ];

    public function propietario()
    {
        return $this->belongsTo(Propietario::class, 'propietario_id');
    }
}
