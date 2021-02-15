<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductToBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_to_branches', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('idplu');
            $table->string('plunamecode');
            $table->integer('idsku');
            $table->string('skunamecode');
            $table->integer('idprice');
            $table->integer('idbranche');
            $table->string('username');
            $table->string('qty');
            $table->string('status');
            $table->string('day');
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
        Schema::dropIfExists('product_to_branches');
    }
}
