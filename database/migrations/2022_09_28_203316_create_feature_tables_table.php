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
        Schema::create('feature_tables', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('heading');
            $table->string('description');
            $table->string('price');
            $table->string('heading1');
            $table->string('description1');
            $table->string('image2');
            $table->string('heading2');
            $table->string('description2');
            $table->string('price2');
            $table->string('heading3');
            $table->string('description3');
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
        Schema::dropIfExists('feature_tables');
    }
};
