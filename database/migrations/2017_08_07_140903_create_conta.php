<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConta extends Migration
{
    /**'
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contas', function (Blueprint $table){
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('titulo',45);
            $table->integer('agencia');
            $table->integer('numero_conta');
            $table->decimal('balanco',11,2);
            $table->decimal('balanco_inicial',11,2);
            $table->integer('bank_id');
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
        Schema::dropIfExists('contas');
    }
}
