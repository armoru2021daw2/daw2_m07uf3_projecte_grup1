<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOngsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ong', function (Blueprint $table) {
            $table->id();
            $table->string('cif');
            $table->string('nom');
            $table->string('adreça');
            $table->string('poblacio');
            $table->string('comarca');
            $table->string('tipusong');
            $table->string('declaracio');
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
        Schema::dropIfExists('ong');
    }
}
