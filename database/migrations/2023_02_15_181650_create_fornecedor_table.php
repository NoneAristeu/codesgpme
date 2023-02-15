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
        Schema::create('fornecedor', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('codigo_conta');
            $table->string("nif_pessoal");
            $table->string("nome_empresa");
            $table->string("telefone");
            $table->string("fax")->nullable();
            $table->string("email")->nullable();
            $table->string("website")->nullable();
            $table->string("endereco");
            $table->timestamps();
            $table->softdeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fornecedor');
    }
};
