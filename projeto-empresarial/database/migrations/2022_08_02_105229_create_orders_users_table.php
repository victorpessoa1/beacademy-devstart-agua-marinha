<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersUsersTable extends Migration
{

    public function up()
    {
        Schema::create('orders_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')
                ->constrained('orders')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
            $table->foreignId('user_id')
                ->constrained('users')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders_users');
    }
}
