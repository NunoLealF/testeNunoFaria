<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    /**
     * Run the migrations.
     */

    public function up(): void
    {

        // Primeiro - a tabela 'produtos' já existe?

        if (!Schema::hasTable('produtos')) {

            // Se não, criá-la.

            Schema::create('produtos', function (Blueprint $table) {

                $table->id('Codigo');	
                $table->string('Nome', length: 100);
                $table->string('Categoria', length: 40);
                $table->decimal('Preco', total: 9, places: 2);
                $table->text('Descricao');

            });

        }

    }


    /**
     * Reverse the migrations.
     */

    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }

};
