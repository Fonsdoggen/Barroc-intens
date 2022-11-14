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
            $table->string('name');
            $table->string('description');
            $table->string('image_path')->nullable();
            $table->decimal('price');
            $table->integer('stock_status')->default(1);
            $table->integer('stock')->default(0);
            $table->boolean('InOrder')->default(false);
            $table->timestamps();
            $table->foreignId('product_category_id')
                ->references('id')
                ->on('product_categories');
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
