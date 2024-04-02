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
        Schema::create('don_dat_xes', function (Blueprint $table) {
            $table->id();
            $table->integer('id_khach_hang');
            $table->dateTime('ngay_di');
            $table->dateTime('ngay_tra');
            $table->integer('id_xe');
            $table->integer('is_dat_coc')->nullable();
            $table->integer('tinh_trang')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('don_dat_xes');
    }
};
