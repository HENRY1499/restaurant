<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $table = "usuarios";
    public $timestamps = 'false';
    protected $fillable = [
        'correo',
        'contraseña',
        'imagen'
    ];
    protected $hidden = [
        'updated_at',
        'created_at'

    ];

    public function cartas()
    {
        return $this->hasMany(Carta::class);
    }
}
