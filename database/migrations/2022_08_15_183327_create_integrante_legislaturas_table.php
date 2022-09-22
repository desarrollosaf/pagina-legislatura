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
        Schema::create('integrante_legislaturas', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->uuid("legislatura_id");
            $table->uuid("diputado_id");
            $table->uuid("partido_id");
            $table->uuid("distrito_id");
            $table->foreign("legislatura_id")->on("legislaturas")->references("id");
            $table->foreign("diputado_id")->on("diputados")->references("id");
            $table->foreign("partido_id")->on("partidos")->references("id");
            $table->foreign("distrito_id")->on("distritos")->references("id");
            $table->date("fecha_ingreso")->nullable();
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
        Schema::dropIfExists('integrante_legislaturas');
    }
};
