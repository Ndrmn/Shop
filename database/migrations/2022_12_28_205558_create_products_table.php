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
            $table->string('brand');
            $table->string('model');
            $table->unsignedFloat('price');
            $table->boolean('is_active')->default(1);
            $table->softDeletes();
            $table->unsignedBigInteger('category_id');
            $table->index('category_id', 'product_category_idx');
            $table->foreign('category_id', 'product_category_fk')->on('categories')->references('id');
            $table->unsignedBigInteger('type_id');
            $table->index('type_id', 'product_type_idx');
            $table->foreign('type_id', 'product_type_fk')->on('types')->references('id');
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
