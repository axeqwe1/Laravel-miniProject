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
        Schema::create('transfer_moneys', function (Blueprint $table) {
            $table->id();
            $table->string('con_order_id', 15);
            $table->dateTime('transfer_datetime')->default(new DateTime());
            $table->integer('transfer_money')->default(12);
            $table->text('transfer_evidence');
            $table->string('transfer_staus', 1);
            $table->foreign('con_order_id')->references('con_order_id')->on('orders')->onDelete('cascade');
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
        Schema::dropIfExists('transfer_moneys');
    }
};
