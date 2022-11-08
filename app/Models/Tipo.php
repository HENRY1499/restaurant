<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    use HasFactory;
    public $timestamps = 'false';
    protected $table = 'tipo';
    protected $fillable = [
        'nombre',
        'descripcion',
    ];
    public function menutipo()
    {
        return $this->hasMany(MenuTipo::class);
    }
}
