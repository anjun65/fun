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
        Schema::create('reseller_details', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('asal');
            $table->date('tanggal_lahir');
            $table->string('no_hp');
            $table->string('instgram');
            $table->string('facebook');
            $table->string('alamat');
            $table->integer('tahun_bergabung');
            $table->integer('total_tf');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_details');
    }
};
