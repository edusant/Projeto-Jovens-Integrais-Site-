<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table) {
            // $table->id();
            $table->increments('id');
            $table->string('Rua')->nullable();
            $table->string('Bairro')->nullable();
            $table->string('Cidade')->nullable();
            $table->string('Estado')->nullable();
            $table->string('Pais')->nullable();
            $table->string('CEP')->nullable();
            $table->string('Numero')->nullable();
            $table->string('UF', 4)->nullable()->nullable();
            $table->unsignedInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enderecos');
    }
}
