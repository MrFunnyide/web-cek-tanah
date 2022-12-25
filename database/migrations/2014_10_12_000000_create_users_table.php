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
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('nip', 100);
            $table->string('username', 100);
            $table->string('password', 100);
            $table->string('nama_lengkap');
            $table->string('alamat');
            $table->string('no_hp');
            $table->enum('jabatan', ['lurah', 'staff']);
            $table->string('foto');
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
        Schema::dropIfExists('user');
    }
};
