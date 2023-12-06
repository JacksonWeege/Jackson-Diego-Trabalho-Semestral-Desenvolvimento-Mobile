<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrinho extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_users'
    ];

    protected $table = 'carrinhos';
    protected $primaryKey = 'id_users';

    public function user() {
        return $this->belongsTo(User::class, 'id_users');
    }
}
