<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSourPartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sour_partners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_partner');
            $table->string('name_part');
            $table->string('id_type_part');
            $table->string('phone')->nullable();
            $table->string('contact_person')->nullable();
            $table->integer('vegetable')->nullable();
            $table->integer('thai_fruits')->nullable();
            $table->integer('fruit_outside')->nullable();
            $table->integer('status')->nullable();
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
        Schema::dropIfExists('sour_partners');
    }
}
