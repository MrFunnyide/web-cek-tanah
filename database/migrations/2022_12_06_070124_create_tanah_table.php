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
        Schema::create('tanah', function (Blueprint $table) {
            $table->id();
            $table->integer('SHM')->unique();
            $table->integer('luas_tanah');
            $table->string('alamat_tanah');
            $table->string('batasan_utara');
            $table->string('batasan_timur');
            $table->string('batasan_selatan');
            $table->string('batasan_barat');
            $table->string('latitude');
            $table->string('longitude');
            $table->index('pemilik_tanah_id');
            $table->foreignId('pemilik_tanah_id')->nullable();
            $table->date('updated_at');
            $table->date('created_at');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tanah');
    }
};
