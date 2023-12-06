<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('marca');
            $table->double('preco');
            $table->double('peso');
            $table->string('slug');
            $table->string('medida');
            $table->string('imagem')->nullable();

            $table->unsignedBigInteger('id_mercados');
            $table->foreign('id_mercados')->references('id')->on('mercados')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('id_categorias');
            $table->foreign('id_categorias')->references('id')->on('categorias')->onDelete('cascade')->onUpdate('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
};
