<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersProductsTable extends Migration
{
    public function up()
    {
        Schema::create('orders_products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')
                ->constrained('orders')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
            $table->foreignId('product_id')
                ->constrained('products')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
            $table->string('quantity')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders_products');
    }
}
