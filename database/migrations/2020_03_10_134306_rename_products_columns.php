<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameProductsColumns extends Migration
{
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->renameColumn("`name-ar`", "`name_ar`");
            $table->renameColumn("`description-ar`", "`description_ar`");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->renameColumn("name_ar", 'name-ar');
            $table->renameColumn('description_ar', 'description-ar');
        });
    }
}
