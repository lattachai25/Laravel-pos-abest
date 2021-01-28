<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSourProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sour_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code_products');
            $table->string('name_products');
            $table->string('detel_products');
            $table->integer('id_partners');
            $table->integer('id_branch');
            $table->integer('id_users');
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
        Schema::dropIfExists('sour_products');
    }
}
