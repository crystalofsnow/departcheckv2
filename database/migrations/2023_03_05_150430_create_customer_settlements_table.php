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
        Schema::create('customer_settlements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_order_id')->constrained();
            $table->date('date');
            $table->integer('total_sales');
            $table->integer('baked_sweets');
            $table->integer('unbaked_sweets');
            $table->integer('materials');
            $table->integer('personnel');
            $table->integer('customer_numbers');
            $table->string('weather');
            $table->text('comment');
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
        Schema::dropIfExists('customer_settlements');
    }
};
