<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_tests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('barcode');
            $table->string('nameproduct');
            $table->string('unit');
            $table->string('mt');
            $table->string('stock_barcode');
            $table->string('color');
            $table->text('note');
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
        Schema::dropIfExists('table_tests');
    }
}
