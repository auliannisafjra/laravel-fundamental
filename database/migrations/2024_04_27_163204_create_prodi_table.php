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
        Schema::create('prodi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fakultas_id');
            $table->string('nama');
            $table->enum('jenjang', ['D3', 'S1', 'S2'])->default('S1');
            $table->unsignedBigInteger('kaprodi_id');
            $table->string('telp');
            $table->text('deskripsi')->nullable();
            $table->timestamps();

            $table->foreign('fakultas_id')->references('id')->on('fakultas');
            $table->foreign('kaprodi_id')->references('id')->on('dosen');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prodi');
    }
};
