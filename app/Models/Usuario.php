<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'email',
        'senha'
    ];

    protected $table = 'usuarios';

    // public function credencial() {
    //     return $this->belongsTo(Credencial::class, 'id_credencial');
    // }
}
