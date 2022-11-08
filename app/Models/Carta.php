<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carta extends Model
{
    use HasFactory;
    protected $table = 'carta';
    public $timestamps = false;
    protected $fillable = ['fecha', 'id_usuario'];
    protected $hidden = ['updated_at', 'created_at'];

    public function usuarios()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario', 'id_usuario');
    }
    public function cartadetalles()
    {
        return $this->hasMany(CartaDetalle::class);
    }
}
