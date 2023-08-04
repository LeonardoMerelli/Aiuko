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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('idUtente');
            $table->string('nome');
            $table->string('cognome')->nullable();
            $table->string('password')->nullable();
            $table->string('genere')->nullable();
            $table->string('eta')->nullable();
            $table->string('telefono', 10)->unique()->nullable();
            $table->string('citta')->nullable();
            $table->string('email')->unique();
            $table->string('google_id')->nullable();
            $table->string('facebook_id')->nullable();
            $table->boolean('setup')->default(false);
            ;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
