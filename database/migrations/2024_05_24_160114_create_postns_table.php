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
        Schema::create('postns', function (Blueprint $table) {
            $table->id();
            $table->string('namapel');
            $table->string('penyelenggara');
            $table->text('tanggalmulai');
            $table->text('tanggalberakhir');
            $table->text('biaya');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('postns');
    }
};
