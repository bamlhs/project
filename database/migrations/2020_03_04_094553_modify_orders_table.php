<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->string("name");
             $table->string("phone");
            $table->string("block");
            $table->string("city");
            $table->string("province");
            $table->string("street");
            $table->string("place-extra");
            $table->boolean('payment_method');
            $table->string("billling_name_on_card");

            $table->string("billling_discount_code")->nullable();
            $table->integer('billling_subtotal');
            $table->integer('billling_tax');

            $table->integer('billling_total');
            $table->integer('billling_discount');
            $table->boolean('shipped');

            // $table->integer("product_id")->unsigned();
            // $table->foreign('product_id')->references('id')->on('products');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
