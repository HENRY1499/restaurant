<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlatoMenu extends Model
{
    use HasFactory;
    public $timestamps = 'false';
    protected $table = 'platomenu';
    protected $fillable = [
        'id_plato',
        'id_bebida',
        'id_menutipo'
    ];
    public function menutipos()
    {
        return $this->belongsTo(MenuTipo::class, 'id_menutipo', 'id_menutipo');
    }
    public function bebidas()
    {
        return $this->belongsTo(Bebidas::class, 'id_bebida', 'id_bebida');
    }
    public function platos()
    {
        return $this->belongsTo(Platos::class, 'id_plato', 'id_plato');
    }
}
