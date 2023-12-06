<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Categoria;
use App\Models\Mercado;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produto>
 */
class ProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $nome = $this->faker->unique()->sentence();
        return [
            'nome' => $nome,
            'marca' => $this->faker->word(),
            'preco' => $this->faker->randomNumber(2),
            'peso' => $this->faker->randomNumber(2),
            'medida' => $this->faker->word(),
            'slug' => Str::slug($nome),
            'imagem' => $this->faker->imageUrl(400, 400),
            'id_mercados' => Mercado::pluck('id')->random(),
            'id_categorias' => Categoria::pluck('id')->random(),
        ];
    }
}
