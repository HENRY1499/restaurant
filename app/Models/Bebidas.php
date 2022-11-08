<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bebidas extends Model
{
    use HasFactory;
    protected $table = 'bebidas';
    public $timestamps = false;
    protected $fillable = [
        'name',
        'price',
        'picture'
    ];

    public function platomenus()
    {
        return $this->hasMany(PlatoMenu::class);
    }
}
