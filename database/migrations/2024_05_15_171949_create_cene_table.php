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
        Schema::create('cene', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idUtente');
            $table->integer('tempoCena');
            $table->string('alimentiPreferiti');
            $table->boolean('antipasto');
            $table->boolean('primo');
            $table->boolean('secondo');
            $table->boolean('contorno');
            $table->boolean('dolce');
            $table->foreign('idUtente')->references('idUtente')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cenas');
    }
};
