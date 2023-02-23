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
        Schema::create('pessoas', function (Blueprint $table) {
            $table->id();
            $table->string("nome");
            $table->string("nif");
            $table->foreignId("endereco")->constrained("enderecos");
            $table->date("data_nascimento");
            $table->enum("genero",['MASCULINO','FEMININO','OUTRO']);
            $table->string("telefone")->nullable();
            $table->enum("estado_civil",['SOLTEIRO','CASADO','DIVORCIADO','VIUVO','OUTRO']);
            $table->integer("codigo_postal")->nullable();          
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
        Schema::dropIfExists('pessoas');
    }
};
