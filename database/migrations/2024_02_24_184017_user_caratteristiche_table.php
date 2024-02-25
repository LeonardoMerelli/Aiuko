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
        Schema::create('caratteristiche', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idUtente');
            $table->foreign('idUtente')->references('idUtente')->on('users');
            $table->string('altezza')->nullable();
            $table->string('peso')->nullable();
            $table->string('genere')->nullable();
            $table->string('eta')->nullable();
            $table->string('livelloAttivita')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('caratteristiche');
    }
};
