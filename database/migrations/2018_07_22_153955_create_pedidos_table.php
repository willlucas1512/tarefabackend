<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('numero')->unique();
            $table->string('data');
            $table->integer('idCliente');
            $table->integer('idProduto');
            $table->integer('quantidade');
        });

        Schema::table('pedidos', function (Blueprint $table) {
          $table->foreign('idCliente')->references('id')->on('clientes')->onDelete('set null');
          $table->foreign('idProduto')->references('id')->on('produtos')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
