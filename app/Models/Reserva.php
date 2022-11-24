<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;
    public $timestamps = 'false';
    protected $table = 'reservamesas';
    protected $casts = [
        'id_cliente' => 'int',
        'id_mesa' => 'int'
    ];
    protected $fillable = [
        'id_cliente',
        'id_mesa',
        'hora',
        'fecha',
        'invitados',
        'comentario'
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
