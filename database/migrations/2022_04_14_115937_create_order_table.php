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
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->string('advance_id');
            $table->string('date');
            $table->string('week');
            $table->string('time');
            $table->string('name');
            $table->string('phone_code');
            $table->string('sex');
            $table->string('birthday');
            $table->string('area');
            $table->string('address');
            $table->string('merchant');
            $table->string('program');
            $table->string('method');
            $table->string('status');
            $table->string('remarks');
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
        Schema::dropIfExists('order');
    }
};
