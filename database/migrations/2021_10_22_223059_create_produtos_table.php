<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
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
            $table->string('name');
            $table->string('dias')->default('Quinta-feira, Sexta-feira, Sábado, Domingo, Segunda-feira, Terça-feira');
            $table->integer('qtd_quitada')->default(0);
            $table->integer('qtd_liberada')->default(0);
            $table->integer('qtd_retirada')->default(0);
            $table->integer('qtd_entregue')->default(0);
            $table->integer('retirada_salvador')->default(0);
            $table->integer('retirada_aeroporto')->default(0);
            $table->integer('retirada_porto')->default(0);
            $table->integer("comprado")->default(0);
            $table->integer("recebido")->default(0);
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
}
