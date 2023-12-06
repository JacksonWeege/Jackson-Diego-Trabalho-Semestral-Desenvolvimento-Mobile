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
        Schema::create('itens', function (Blueprint $table) {
            $table->id();
            $table->integer('quantidade');
            $table->timestamps();

            $table->unsignedBigInteger('id_carrinhos');
            $table->foreign('id_carrinhos')->references('id')->on('carrinhos')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('id_produtos');
            $table->foreign('id_produtos')->references('id')->on('produtos')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itens');
    }
};
