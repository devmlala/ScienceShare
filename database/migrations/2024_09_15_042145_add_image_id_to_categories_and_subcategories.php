<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImageIdToCategoriesAndSubcategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->foreignId('image_id')->nullable()->constrained('images')->onDelete('set null');
        });

        Schema::table('subcategories', function (Blueprint $table) {
            $table->foreignId('image_id')->nullable()->constrained('images')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('categories_and_subcategories', function (Blueprint $table) {
            //
        });
    }
}
