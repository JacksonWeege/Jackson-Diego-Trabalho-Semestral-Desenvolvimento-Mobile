<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    use HasFactory;

    protected $fillable = [
        'quantidade',
        'id_carrinhos',
        'id_produtos'
    ];

    protected $table = 'itens';

    public function carrinho() {
        return $this->belongsTo(Carrinho::class, 'id_carrinhos');
    }

    public function produto() {
        return $this->belongsTo(Produto::class, 'id_produtos');
    }
}
