<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->int('id');
            $table->string('con_order_id',15)->primary();
            $table->string('buyer_fname', 100);
            $table->string('buyer_lname', 100);
            $table->text('buyer_address');
            $table->string('buyer_tel', 10);
            $table->string('buyer_email', 100);
            $table->string('con_status',1);
            $table->foreign('transfer_id')->references('id')->on('transfer_money')->onDelete('cascade');
            $table->dateTime('order_date')->default(new DateTime());
            $table->integer('shipping_cost');
            $table->integer('total_price');
            $table->string('postal_number',10);
            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
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
};
