<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'marca',
        'preco',
        'peso',
        'medida',
        'slug',
        'imagem',
        'id_mercados',
        'id_categorias'
    ];

    protected $table = 'produtos';

    public function mercado() {
        return $this->belongsTo(Mercado::class, 'id_mercados');
    }

    public function categoria() {
        return $this->belongsTo(Categoria::class, 'id_categorias');
    }
}
