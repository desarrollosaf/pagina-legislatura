<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutorIniciativasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autor_iniciativas', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->uuid("iniciativa_id");
            $table->foreign("iniciativa_id")->references("id")->on("iniciativas");
            $table->uuid("tipo_autor_id");
            $table->foreign("tipo_autor_id")->references("id")->on("tipo_autor");
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
        Schema::dropIfExists('autor_iniciativas');
    }
}
