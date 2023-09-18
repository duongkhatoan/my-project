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
        Schema::create('status_order', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique(); // Tên trạng thái, ví dụ: 'Đã thanh toán', 'Đang xử lý', 'Đã giao hàng'
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('status_order');
    }
};
