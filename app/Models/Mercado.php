<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mercado extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'cidade',
        'bairro'
    ];

    protected $table = 'mercados';

    public function produtos() {
        return $this->hasMany(Produto::class, 'id_mercados', 'id');
    }
}
