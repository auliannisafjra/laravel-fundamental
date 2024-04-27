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
        Schema::create('matkul_ambil', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('matkul_id')->constrained(table: 'matakuliah');
            $table->foreignId('mhs_id')->constrained(table: 'mahasiswa');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matkul_ambil_');
    }
};
