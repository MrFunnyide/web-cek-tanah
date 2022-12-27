<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('srt_berpenghasilan', function (Blueprint $table) {
            $table->id();
            $table->index('pemohon_id');
            $table->foreignId('pemohon_id')->nullable();
            $table->string('fc_ktp');
            $table->string('fc_kk');
            $table->string('srt_pernyataan');
            $table->string('fc_tanda_lunas_pbb');
            $table->enum('status', ['diterima', 'ditolak', 'proses', 'selesai']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('srt_berpenghasilan');
    }
};
