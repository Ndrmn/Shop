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
            $table->unsignedBigInteger('type_id')->nullable();
            $table->unsignedBigInteger('brand_id')->nullable();
            $table->foreign('category_id')->
            references('id')->
            on('categories')->
            onDelete('cascade');
            $table->foreign('type_id')->
            references('id')->
            on('types')->
            onDelete('cascade');
            $table->foreign('brand_id')->
            references('id')->
            on('brands')->
            onDelete('cascade');
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
