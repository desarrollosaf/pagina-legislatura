<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIniciativasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iniciativas', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->unsignedSmallInteger("folio");
            $table->uuid("categoria_id");
            $table->longText("iniciativa");
            $table->date("fecha_presentacion");
            $table->date("fecha_expedicion");
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
        Schema::dropIfExists('iniciativas');
    }
}
