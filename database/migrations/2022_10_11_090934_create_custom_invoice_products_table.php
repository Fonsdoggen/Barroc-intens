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
        Schema::create('custom_invoice_products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')
            ->references('id')
            ->on('products');
            $table->integer('amount');
            $table->decimal('price_per_product');
            $table->foreignId('quotation_id')
                ->references('id')
                ->on('quotation');
            $table->integer('billing_type');
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
        Schema::dropIfExists('custom_invoice_products');
    }
};
