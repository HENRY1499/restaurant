<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartaDetalle extends Model
{
    use HasFactory;
    public $timestamps = 'false';
    protected $table = 'cartadetalle';
    protected $fillable = [
        'id_menutipo',
        'id_carta'
    ];
    public function cartas()
    {
        return $this->belongsTo(Carta::class, 'id_carta', 'id_carta');
    }
    public function menutipos()
    {
        return $this->belongsTo(MenuTipo::class, 'id_menutipo', 'id_menutipo');
    }
}
