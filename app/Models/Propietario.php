<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Propietario extends Model
{
    use HasFactory;
    protected $table = 'propietario';

    protected $fillable = [
        'nombre',
        'apellido_pat',
        'apellido_mat',
        'telefono',
        'direccion',
    ];

    public function vehiculos()
    {
        return $this->hasMany(Vehiculo::class, 'propietario_id');
    }
}
