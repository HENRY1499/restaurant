<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platos extends Model
{
    use HasFactory;
    public $timestamps = 'platos';
    protected $table = 'platos';
    protected $fillable = [
        'id_foto',
        'nombre',
        'descripcion',
        'precio'
    ];

    public function platomenus()
    {
        return $this->hasMany(PlatoMenu::class);
    }
    public function fotos()
    {
        return $this->belongsTo(Fotos::class, 'id_foto', 'id_foto');
    }
}
