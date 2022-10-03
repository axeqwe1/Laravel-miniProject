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
            $table->integer('id')->nullable();
            $table->bigInteger('con_order_id')->primary()->unsigned();
            $table->string('buyer_fname', 100)->nullable();
            $table->string('buyer_lname', 100)->nullable();
            $table->text('buyer_address')->nullable();
            $table->string('buyer_tel', 10)->nullable();
            $table->string('buyer_email', 100)->nullable();
            $table->string('con_status',1)->nullable();
            $table->bigInteger('transfer_id')->unsigned();
            $table->foreign('transfer_id')->references('id')->on('transfer_moneys')->onDelete('cascade');
            $table->dateTime('order_date')->nullable();
            $table->integer('shipping_cost')->nullable();
            $table->integer('total_price')->nullable();
            $table->string('postal_number',10)->nullable();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
        Schema::table('order_items', function (Blueprint $table) {
            $table->foreign('order_id')->references('con_order_id')->on('orders')->onDelete('cascade');
        });
        Schema::table('transfer_moneys', function (Blueprint $table) {
            $table->foreign('con_order_id')->references('con_order_id')->on('orders')->onDelete('cascade');
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
