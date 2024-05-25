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
        Schema::create('postqs  ', function (Blueprint $table) {
            $table->id();
            $table->string('pendtera');
            $table->string('namainstitusi');
            $table->text('tahunlulus');
            $table->text('gpa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('postqs');
    }
};
