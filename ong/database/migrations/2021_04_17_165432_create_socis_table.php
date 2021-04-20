<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socis', function (Blueprint $table) {
            $table->id();
            $table->string('nif');
            $table->string('nom');
            $table->string('cognoms');
            $table->string('adreça');
            $table->string('poblacio');
            $table->string('comarca');
            $table->string('telfix');
            $table->string('telf');
            $table->string('email');
            $table->string('datalta');
            $table->string('quota');
            $table->string('aportacio');
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
        Schema::dropIfExists('socis');
    }
}
