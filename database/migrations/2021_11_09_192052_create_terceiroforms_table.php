<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTerceiroformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terceiroforms', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('trabalhando')->nullable()->default(0);
            $table->boolean('desempregado')->nullable()->default(0);
            $table->boolean('nunca_trabalhou')->nullable()->default(0);
            $table->string('com_quem_mora');
            $table->string('renda');
            $table->string('quatidade_moradores_na_casa');
            $table->string('ultimo_cargo')->nullable();

            $table->unsignedInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('terceiroforms');
    }
}
