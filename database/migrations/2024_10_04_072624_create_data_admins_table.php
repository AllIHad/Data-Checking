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
        Schema::create('data_admin', function (Blueprint $table) {
            $table->id();
            $table->string('id_admin');
            $table->string('nama_admin');
            $table->enum('jenis_kelamin', ['Perempuan','Laki-Laki']);
            $table->string('alamat');
            $table->string('no_hp');
            $table->string('email');
            $table->string('username');
            $table->string('password');
            $table->enum('level',['admin','pemilik','kasir']);
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_admin');
    }
};
