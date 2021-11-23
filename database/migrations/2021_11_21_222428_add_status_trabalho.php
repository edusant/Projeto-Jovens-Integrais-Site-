<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusTrabalho extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('terceiroforms', function (Blueprint $table) {
            //
            $table->string('status_trabalho')->nullable();
            $table->string('cargo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('terceiroforms', function (Blueprint $table) {
            //
            $table->dropColumn('status_trabalho');
            $table->dropColumn('cargo');
        });
    }
}
