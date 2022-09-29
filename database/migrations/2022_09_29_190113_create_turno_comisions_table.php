<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTurnoComisionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turno_comisions', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid("iniciativa_id");
            $table->foreign("iniciativa_id")->on("iniciativas")->references("id");
            $table->uuid("comision_id");
            $table->foreign("comision_id")->on("comisions")->references("id");
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
        Schema::dropIfExists('turno_comisions');
    }
}
