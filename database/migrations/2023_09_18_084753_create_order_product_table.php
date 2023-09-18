<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('order_product', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('product_id'); // ID của sản phẩm
            $table->unsignedBigInteger('product_variant_id')->nullable(); // ID của biến thể sản phẩm (nếu có)
            $table->integer('quantity'); // Số lượng sản phẩm trong đơn đặt hàng
            $table->timestamps();

            $table->foreign('order_id')
                ->references('id')
                ->on('orders')
                ->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('product_variant_id')->references('id')->on('product_variants');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_product');
    }
};
