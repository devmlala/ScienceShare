<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Exemplo de coluna adicional
            $table->foreignId('material_id') // Chave estrangeira
                ->nullable() // Permite que o campo seja nulo
                ->constrained('materials') // Referencia a tabela materials
                ->nullOnDelete(); // Garante que ao deletar um material, o campo seja configurado como NULL
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
