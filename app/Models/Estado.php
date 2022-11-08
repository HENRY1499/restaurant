<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mesa;

class Estado extends Model
{
    use HasFactory;
    protected $table = 'estado';
    public $timestamps = 'false';
    protected $fillable = [
        'estado'
    ];
    public function mesas()
    {
        return $this->hasMany(Mesa::class);
    }
    public function turno()
    {
        return $this->hasMany(MenuTurno::class);
    }
}
