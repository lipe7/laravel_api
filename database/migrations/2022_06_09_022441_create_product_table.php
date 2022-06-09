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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('name', 80);
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('company_id');
            $table->string('description', 255);
            $table->integer('price');
            $table->string('image', 255);
            $table->timestamps();
        });

        Schema::table('product', function (Blueprint $table) {
            $table->foreign('category_id')->references('id')->on('category');
            $table->foreign('company_id')->references('id')->on('company');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
};
