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
        Schema::table('users', function (Blueprint $table) {
            // Sử dụng ->change() để sửa đổi cột đã tồn tại
            $table->boolean('is_admin')->default(false)->change();
            $table->boolean('is_active')->default(true)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Quay lại trạng thái cũ (không có default)
            $table->boolean('is_admin')->default(null)->change();
            $table->boolean('is_active')->default(null)->change();
        });
    }
};
