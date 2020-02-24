<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->integer('id_registrasi');
            $table->integer('id_asesor');
            $table->integer('id_klaster');
            $table->string('tempat_asesi', 255);
            $table->date('tanggal_mulai_asesi');
            $table->date('tanggal_selesai_asesi');
            $table->string('ket_bukti_kelengkapan_persyaratan_1');
            $table->string('ket_bukti_kelengkapan_persyaratan_2');
            $table->string('ket_bukti_kelengkapan_persyaratan_3');
            $table->string('ket_bukti_kelengkapan_persyaratan_4')->nullable();
            $table->string('ket_bukti_kompetensi_1');
            $table->string('ket_bukti_kompetensi_2');
            $table->string('ket_bukti_kompetensi_3');
            $table->string('ket_bukti_kompetensi_4')->nullable();
            $table->string('status', 255);
            $table->text('keterangan')->nullable();
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participants');
    }
}
