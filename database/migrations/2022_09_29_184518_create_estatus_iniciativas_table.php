<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstatusIniciativasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estatus_iniciativas', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid("tipo_estatus_id");
            $table->uuid("iniciativa_id");
            $table->foreign("tipo_estatus_id")->on("tipo_estatuses")->references("id");
            $table->foreign("iniciativa_id")->on("iniciativas")->references("id");
            $table->date("fecha");
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estatus_iniciativas');
    }
}
