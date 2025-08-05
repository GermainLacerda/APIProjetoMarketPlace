<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id(); // ID auto-incremento
            $table->string('titulo');
            $table->foreignId('categoria_id')
                ->constrained('categories')
                ->onDelete('cascade');
            $table->string('imgLink')->nullable(); // URL da imagem
            $table->decimal('price', 10, 2); // Preço com 2 casas decimais
            $table->text('descricao')->nullable(); // Descrição longa
            $table->timestamps(); // created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
