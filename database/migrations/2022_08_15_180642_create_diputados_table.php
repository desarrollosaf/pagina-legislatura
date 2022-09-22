<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diputados', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->string("apaterno");
            $table->string("amaterno");
            $table->string("nombres");
            $table->string("shortname");
            $table->string("fancyurl");
            $table->uuid("gender_id");
            $table->foreign("gender_id")->on("genders")->references("id");
            $table->string("email");
            $table->string("ext");
            $table->string("facebook");
            $table->string("twitter");
            $table->string("instagram");
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
        Schema::dropIfExists('diputados');
    }
};
