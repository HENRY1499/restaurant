<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platos extends Model
{
    use HasFactory;
    public $timestamps = 'false';
    protected $table = 'platos';
    protected $fillable = [
        'imagen',
        'nombre',
        'descripcion',
        'precio'
    ];
    protected $hidden = [
        'updated_at',
        'created_at'
    ];

    public function platomenus()
    {
        return $this->hasMany(PlatoMenu::class);
    }


    public function menutipo()
    {
        return $this->hasMany(PlatoMenu::class);
    }
}
