<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registration_files', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("mbkm_id")->nullable();
            $table->foreign("mbkm_id")->references("id")->on("mbkm")->onDelete("set null")->onUpdate("set null");
            $table->string("sertifikat_kegiatan");
            $table->string("laporan_kegiatan");
            $table->string("luaran_kegiatan");
            $table->date("tanggal_mulai_kegiatan");
            $table->date("tanggal_selesai_kegiatan");
            $table->string("dokumentasi");
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
        Schema::dropIfExists('registration_files');
    }
}
