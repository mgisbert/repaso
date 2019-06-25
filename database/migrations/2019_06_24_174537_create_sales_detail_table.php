<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_detail', function (Blueprint $table) {
            $table->bigIncrements('id');
                $table->unsignedBigInteger('sale_id');
                $table->foreign('sale_id')->references('id')->on('sales');
                $table->unsignedBigInteger('product_id');
                $table->foreign('product_id')->references('id')->on('products');
            $table->decimal('quantity', 8,2);
            $table->decimal('unit_price', 8,2);
            $table->decimal('subtotal', 8,2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales_detail');
    }
}
