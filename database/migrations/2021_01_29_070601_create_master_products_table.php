<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasterProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_plu');
            $table->string('id_sku');
            $table->string('plu_code_name');
            $table->string('price1');
            $table->string('price2');
            $table->string('price3');
            $table->string('price4');
            $table->string('model');
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
        Schema::dropIfExists('master_products');
    }
}
