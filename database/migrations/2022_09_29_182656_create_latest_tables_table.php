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
        Schema::create('latest_tables', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('car');
            $table->string('description');
            $table->string('price');
            $table->string('image1');
            $table->string('car1');
            $table->string('description1');
            $table->string('price1');
            $table->string('image2');
            $table->string('car2');
            $table->string('description2');
            $table->string('price2');
            $table->string('image3');
            $table->string('car3');
            $table->string('description3');
            $table->string('price3');
            $table->boolean('status');
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
        Schema::dropIfExists('latest_tables');
    }
};
