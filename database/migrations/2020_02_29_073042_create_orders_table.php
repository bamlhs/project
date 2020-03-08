<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
                 $table->bigIncrements('id');
                $table->string("name");
                 $table->string("phone");
                $table->string("block");
                $table->string("city");
                $table->string("province");
                $table->string("street");
                $table->string("place-extra")->nullable();
                $table->boolean('payment_method');
                $table->string("billling_name_on_card")->nullable();
    
                $table->string("billling_discount_code")->nullable();
                $table->integer('billling_subtotal')->nullable();
                $table->integer('billling_tax')->nullable();
    
                $table->integer('billling_total')->nullable();
                $table->integer('billling_discount')->nullable();
                $table->boolean('shipped');
                $table->bigInteger('user_id')->unsigned()->nullable();
                $table->foreign('user_id')->references('id')->on('users');        
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
        Schema::dropIfExists('orders');
    }
}
