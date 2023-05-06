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
        Schema::create('supports', function (Blueprint $table) {
            $table->id();
            $table->integer('parent_id')->unsigned()->nullable();
            $table->string('nik');
            $table->string('nama');
            $table->string('alamat');
            $table->string('rt');
            $table->unsignedBigInteger('kabupaten_id');
            $table->unsignedBigInteger('kecamatan_id');
            $table->unsignedBigInteger('kelurahan_id');
            $table->string('scanktp');
            $table->string('nohp')->nullable();
            $table->string('keterangan')->nullable();
            $table->integer('rating');
            $table->unsignedBigInteger('location_id')->nullable();
            $table->unsignedBigInteger('participant_id');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamps();
            $table->foreign('kabupaten_id')->references('id')->on('kabupatens');
            $table->foreign('kecamatan_id')->references('id')->on('kecamatans');
            $table->foreign('kelurahan_id')->references('id')->on('kelurahans');
            $table->foreign('location_id')->references('id')->on('locations');
            $table->foreign('participant_id')->references('id')->on('participants');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supports');
    }
};
