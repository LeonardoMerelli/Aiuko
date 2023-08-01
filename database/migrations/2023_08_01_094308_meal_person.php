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
        Schema::create('meal_person', function (Blueprint $table) {
            $table->bigIncrements('idMealPerson');
            $table->unsignedBigInteger('idPasto');
            $table->unsignedBigInteger('idUtente');
            #metiamo come data YYYY/MM/dd non come lunedi martedi ecc
            $table->string('giorno');
            $table->foreign('idPasto')->references('idPasto')->on('meals');
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
        Schema::dropIfExists('meal_person');
    }
};
