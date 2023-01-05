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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('model');
            $table->unsignedDecimal('price');
            $table->boolean('is_active')->default(1);
            $table->boolean('featured')->default(0);
            $table->softDeletes();
            $table->text('description');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->on('categories')->references('id');
            $table->unsignedBigInteger('type_id')->nullable();
            $table->foreign('type_id')->on('types')->references('id');
            $table->unsignedBigInteger('brand_id')->nullable();
            $table->foreign('brand_id')->on('brands')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
