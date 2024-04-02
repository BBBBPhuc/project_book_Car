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
        Schema::create('nhan_viens', function (Blueprint $table) {
            $table->id();
            $table->string('ten_nhan_vien');
            $table->text('dia_chi');
            $table->text('so_dien_thoai');
            $table->date('ngay_sinh');
            $table->string('email');
            $table->string('password');
            $table->string('can_cuoc_cong_dan')->nullable();
            $table->string('hinh_anh')->nullable();
            $table->string('id_chuc_vu')->nullable();
            $table->integer('tinh_trang')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nhan_viens');
    }
};
