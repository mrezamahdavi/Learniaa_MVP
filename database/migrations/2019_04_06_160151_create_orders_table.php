<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigInteger('order_id');
            $table->string('category');
            $table->string('title');
            $table->string('description');
            $table->text('questions');
            $table->string('owners');
            $table->string('Files')->nullable();
            $table->string('need_expert_price')->default('No');
            $table->double('price')->nullable();
            $table->string('producers')->nullable();
            $table->string('status')->default('Not Visited');
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
