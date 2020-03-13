<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductVariationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_variations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("product_id")->unsigned();;
            $table->foreign('product_id')->references('id')->on('products');
            $table->string("productVariantName");
            $table->string("sku")->nullable();
            $table->decimal("price", 9, 2);
            $table->decimal("discount", 9, 2);
            $table->softDeletes();        
            $table->boolean("available")->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_variations');
    }
}
