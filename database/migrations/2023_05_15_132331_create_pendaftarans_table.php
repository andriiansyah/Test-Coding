<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->string('email')->nullable();
            $table->string('nama_lengkap')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('tgl_lahir')->nullable();
            $table->string('agama')->nullable();
            $table->string('alamat')->nullable();
            $table->string('pendidikan_terakhir')->nullable();
            $table->string('lokasi_kampus')->nullable();
            $table->string('program_studi')->nullable();
            $table->string('ktp')->nullable();
            $table->string('ijazah')->nullable();
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
        Schema::dropIfExists('pendaftarans');
    }
}
