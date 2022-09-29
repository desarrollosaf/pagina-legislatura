<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDecretosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('decretos', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->date("fecha_decreto");
            $table->string("num_decreto");
            $table->string("nombre_decreto");
            $table->uuid("iniciativa_id");
            $table->foreign("iniciativa_id")->on("iniciativas")->references("id");
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
        Schema::dropIfExists('decretos');
    }
}
