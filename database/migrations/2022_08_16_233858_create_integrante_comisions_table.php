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
        Schema::create('integrante_comisions', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->uuid("comision_id");
            $table->uuid("integrante_legislatura_id");
            $table->uuid("tipo_cargo_comision_id");
            $table->foreign("comision_id")->on("comisions")->references("id");
            $table->foreign("integrante_legislatura_id")->on("integrante_legislaturas")->references("id");
            $table->foreign("tipo_cargo_comision_id")->on("tipo_cargo_comisions")->references("id");
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
        Schema::dropIfExists('integrante_comisions');
    }
};
