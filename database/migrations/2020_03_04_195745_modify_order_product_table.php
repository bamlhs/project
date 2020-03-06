<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyOrderProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('products');
            
            $table->bigInteger('order_id')->unsigned();
            $table->foreign('order_id')->references('id')->on('orders');
            $table->integer('quantity')->unsigned();


         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders_products', function (Blueprint $table) {
            $table->dropColumn('id');
            $table->dropColumn('product_id')->unsigned();
            
            $table->dropColumn('order_id')->unsigned();
            $table->dropColumn('quantity')->unsigned();
        });
    }
}
