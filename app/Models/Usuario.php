<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $table = "usuarios";
    public $timestamps = false;
    protected $fillable = [
        'correo',
        'contraseña',
        'id_foto'
    ];
    protected $hidden = [
        'updated_at',
        'created_at'
    ];
    public function fotos()
    {
        return $this->belongsTo(Fotos::class, 'id_foto', 'id_foto');
    }
    public function cartas()
    {
        return $this->hasMany(Carta::class);
    }
}
