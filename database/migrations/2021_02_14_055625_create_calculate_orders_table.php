<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalculateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calculate_orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('barcode');
            $table->string('nameproduct');
            $table->string('unit')->nullable()->default('NULL');
            // $table->string('order_plan');
            $table->string('stock')->nullable()->default('NULL');
            $table->string('safety')->nullable()->default('NULL');
            $table->string('order')->nullable()->default('NULL');
            $table->string('unit_type')->nullable()->default('NULL');
            $table->string('text_comment')->nullable()->default('NULL');
            $table->string('booktime');
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
        Schema::dropIfExists('calculate_orders');
    }
}
