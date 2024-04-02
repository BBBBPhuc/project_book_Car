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
        Schema::create('san_phams', function (Blueprint $table) {
            $table->id();
            $table->string('ten_san_pham');
            $table->integer('id_loai');
            $table->float('don_gia');
            $table->longText('mo_ta');
            $table->text('hinh_anh_main');
            $table->text('hinh_anh_1');
            $table->text('hinh_anh_2');
            $table->text('hinh_anh_3');
            $table->integer('id_dong_xe');
            $table->integer('id_hang_xe');
            $table->integer('tinh_trang');
            $table->text('bien_so_xe');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('san_phams');
    }
};
