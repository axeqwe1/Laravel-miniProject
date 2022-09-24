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
        Schema::create('products', function (Blueprint $table) {
            $table->string('product_id', 10);
            $table->string('product_name', 100);
            $table->text('product_detail');
            $table->integer('product_price');
            $table->integer('product_qty');
            $table->text('product_pic');
            $table->text('product_note');
<<<<<<< HEAD
            $table->foreign('category_id')->references('id')->on('category')->onDelete('cascade');
=======
            $table->foreign('category_id')->references('id')->on('category');
>>>>>>> 5043a1bb82d7abcf4cebde3561373f701a5f2717
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
        Schema::dropIfExists('products');
    }
};
