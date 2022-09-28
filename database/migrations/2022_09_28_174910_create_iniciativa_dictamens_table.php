<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIniciativaDictamensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iniciativa_dictamens', function (Blueprint $table) {
            $table->id();
            $table->date("fecha")->nullable();
            $table->string("dictamen");
            $table->foreign("id_iniciativa_id")->on("iniciativas")->references("id");
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
        Schema::dropIfExists('iniciativa_dictamens');
    }
}
