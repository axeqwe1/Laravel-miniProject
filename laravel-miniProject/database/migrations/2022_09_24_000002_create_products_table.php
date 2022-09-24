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
            $table->id();
            $table->string('product_id', 10);
            $table->string('product_name', 100);
            $table->unsignedBigInteger('category_id');
            $table->text('product_detail');
            $table->integer('product_price');
            $table->integer('product_qty');
            $table->text('product_pic');
            $table->text('product_note');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->timestamps();

        });
        // Schema::table('products', function (Blueprint $table) {
        //     $table->foreignId('category_id')->constrained();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products',function(Blueprint $table){
            $table->dropForeign('products_category_id_foreign');
        });
        Schema::dropIfExists('products');
    }
};
