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
        Schema::create('user_orders', function (Blueprint $table) {
            $table->id();
            $table->string('user_id',10);
            $table->text('user_fname',100);
            $table->text('user_lname',100);
            $table->string('user_username',100);
            $table->text('user_password');
            $table->string('user_sex',1);
            $table->text('user_address');
            $table->date('user_bod');
            $table->string('user_tel',10);
            $table->string('user_email',100);
            $table->string('role',1);
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
        Schema::dropIfExists('user_orders');
    }
};
