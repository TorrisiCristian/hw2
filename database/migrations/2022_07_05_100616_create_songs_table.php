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
        Schema::create('songs', function (Blueprint $table) {
            $table->id();
            $table->string('autore',255);
            $table->string('canzone',255);
            //Indice 
            $table->unsignedBigInteger('admins_id');
            $table->string('immagine',255);
            $table->string('link',255);
            $table->timestamps();
            //FOREIGN KEY admins_id ->id
            $table->foreign('admins_id')->references('id')->on('admins');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('songs');
    }
};
