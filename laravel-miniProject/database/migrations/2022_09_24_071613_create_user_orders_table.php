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
            $table->varchar('user_sex',1);
            $table->text('user_address');
            $table->date('user_bod');
            $table->varchar('user_tel',10);
            $table->varchar('user_email',100);
            $table->varchar('role',1);

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
