<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFileColumnsToMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('materials', function (Blueprint $table) {
            $table->string('file_path')->nullable(); // Para armazenar o caminho do arquivo
            $table->string('file_type')->nullable(); // Para armazenar o tipo de arquivo (pdf, jpg, etc.)
        });
    }
    
    public function down()
    {
        Schema::table('materials', function (Blueprint $table) {
            $table->dropColumn(['file_path', 'file_type']);
        });
    }
    
}
