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
        Schema::create('order_status_history', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id'); // Khóa ngoại đến bảng đơn đặt hàng
            $table->unsignedBigInteger('status_id'); // Khóa ngoại đến bảng trạng thái đơn đặt hàng
            $table->unsignedBigInteger('old_status_id'); // Khóa ngoại đến bảng trạng thái đơn đặt hàng (trạng thái trước đó)
            $table->timestamp('created_at')->useCurrent();

            $table->foreign('order_id')->references('id')->on('orders');
            $table->foreign('status_id')->references('id')->on('status_order');
            $table->foreign('old_status_id')->references('id')->on('status_order');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_status_history');
    }
};
