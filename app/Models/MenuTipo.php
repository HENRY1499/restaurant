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
    public function platosmenus()
    {
        return $this->hasMany(PlatoMenu::class);
    }
    public function cartadetalles()
    {
        return $this->hasMany(CartaDetalle::class);
    }
}
