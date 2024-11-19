<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSubcategoryIdToMaterialsTable extends Migration
{
    public function up()
    {
        Schema::table('materials', function (Blueprint $table) {
            // Remove category_id se existir
            if (Schema::hasColumn('materials', 'category_id')) {
                $table->dropColumn('category_id'); // Remove a coluna category_id se ela existir
            }
            // Adiciona a coluna subcategory_id
            $table->unsignedBigInteger('subcategory_id')->nullable(); // Adiciona subcategory_id
            
            // Adiciona a coluna user_id, se ainda não estiver presente
            if (!Schema::hasColumn('materials', 'user_id')) {
                $table->unsignedBigInteger('user_id')->nullable(); // Adiciona user_id
            }
        });
    }

    public function down()
    {
        Schema::table('materials', function (Blueprint $table) {
            $table->dropColumn('subcategory_id'); // Remove subcategory_id se necessário
            // Restaura category_id, se necessário
            $table->unsignedBigInteger('category_id')->nullable(); // Restaura category_id
            $table->dropColumn('user_id'); // Remove user_id se necessário
        });
    }
}