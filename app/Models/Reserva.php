<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;
    public $timestamps = 'false';
    protected $table = 'reservamesas';
    protected $fillable = [
        'id_cliente',
        'id_mesa',
        'hora',
        'fecha'
    ];

    public function cliente()
    {
        return $this->belongsTo(cliente::class, 'id_cliente', 'id_cliente');
    }
    public function mesa()
    {
        return $this->belongsTo(Mesa::class, 'id_mesa', 'id_mesa');
    }
}
