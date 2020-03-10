<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTransactionDetailsToOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->string("result_info")->nullable();
            $table->string("pt_invoice_id")->nullable();
            $table->string("transaction_id")->nullable();                      
            $table->boolean("successful")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn('result_info');
            $table->dropColumn('pt_invoice_id');
            $table->dropColumn('transaction_id');
            $table->dropColumn("successful");

        });
    }
}
