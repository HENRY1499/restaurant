<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuTurno extends Model
{
    use HasFactory;
    public $timestamps = 'false';
    protected $table = 'menuturno';
    protected $fillable = [
        'hora',
        'id_menu',
        'id_estado'
    ];
    public function menu()
    {
        return $this->belongsTo(Menu::class, 'id_menu', 'id_menu');
    }
    public function estado()
    {
        return $this->belongsTo(Estado::class, 'id_estado', 'id_estado');
    }
    public function menuTipo()
    {
        return $this->hasMany(MenuTipo::class);
    }
}
