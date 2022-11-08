<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fotos extends Model
{
    use HasFactory;
    protected $table = 'fotos';
    private $timstamps = 'false';
    protected $fillable = [
        'ruta',
        'type'
    ];
    public function platos()
    {
        return $this->hasMany(Platos::class);
    }
    public function usuarios()
    {
        return $this->hasMany(Usuario::class);
    }
}
