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
        Schema::create('forma_pagamento', function (Blueprint $table) {
            $table->id();
            $table->enum("meio_de_pagamento",['credito','debito','bancario','cheque','numerario','dinheiro_eletronico']);
            $table->string("user_api");
            $table->string("senha_api");
            $table->string("assinatura_api");
            $table->foreignId("id_moeda")->constrained("moeda")->nullable();
            $table->string("ambiente")->nullable();
            $table->string("titulo")->nullable();
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
        Schema::dropIfExists('forma_pagamento');
    }
};
