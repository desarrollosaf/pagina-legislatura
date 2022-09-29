<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDecretoIniciativasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('decreto_iniciativas', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->date("fecha_decreto");
            $table->unsignedBigInteger("numero_decreto");
            $table->longText("nombre_decreto");
            $table->uuid("iniciativa_id");
            $table->foreign("iniciativa_id")->references("id")->on("iniciativas");
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
        Schema::dropIfExists('decreto_iniciativas');
    }
}
