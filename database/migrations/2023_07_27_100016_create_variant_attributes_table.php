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
        Schema::create('variant_attributes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('variant_id');
            $table->unsignedBigInteger('attribute_id');
            $table->unsignedBigInteger('value_id');
            // Thêm các trường cần thiết khác tùy theo yêu cầu sản phẩm

            $table->timestamps();

            // Thêm foreign key liên kết với bảng product_variants
            $table->foreign('variant_id')->references('id')->on('product_variants')->onDelete('cascade');

            // Thêm foreign key liên kết với bảng attributes
            $table->foreign('attribute_id')->references('id')->on('attributes')->onDelete('cascade');

            // Thêm foreign key liên kết với bảng attribute_values
            $table->foreign('value_id')->references('id')->on('attribute_values')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('variant_attributes');
    }
};
