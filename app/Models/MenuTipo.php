<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuTipo extends Model
{
    use HasFactory;
    public $timestamps = 'false';
    protected $table = 'menutipo';
    protected $fillable = [
        'id_plato',
        'id_turno',
        'id_tipo'
    ];
    public function turnos()
    {
        return $this->belongsTo(MenuTurno::class, 'id_turno', 'id_turno');
    }
    public function tipos()
    {
        return $this->belongsTo(Tipo::class, 'id_tipo', 'id_tipo');
    }
    public function platos()
    {
        return $this->belongsTo(Platos::class, 'id_plato', 'id_plato');
    }
    public function cartadetalles()
    {
        return $this->hasMany(CartaDetalle::class);
    }
}
