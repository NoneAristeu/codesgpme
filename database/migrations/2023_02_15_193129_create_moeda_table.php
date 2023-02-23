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
        Schema::create('moeda', function (Blueprint $table) {
            $table->id();
            $table->integer("codigo_moeda");
            $table->string("moeda");
            $table->double("taxa_cambio");
            $table->foreignId("id_pais")->constrained("pais");
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
        Schema::dropIfExists('moeda');
    }
};
