<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    use HasFactory;
    protected $table = "clientes";
    public $timestamps = false;
    protected $fillable = [
        'nombres',
        'apellidos',
        'dni',
        'correo',
        'contraseña',
        'imagen'
    ];
    protected $hidden = [
        'updated_at',
        'created_at'
    ];

    public function reserva()
    {
        return $this->hasMany(Reserva::class);
    }
}
