<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Estado;

class Mesa extends Model
{
    use HasFactory;
    public $timestamps = 'false';
    protected $table = 'mesas';
    protected $fillable = [
        'numero',
        'id_estado'
    ];

    public function estados()
    {
        return $this->belongsTo(Estado::class, 'id_estado', 'id_estado');
    }
}
