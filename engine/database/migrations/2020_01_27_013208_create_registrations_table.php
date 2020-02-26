<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('nama_lengkap', 255);
            $table->char('nik', 25);
            $table->string('tempat_lahir', 255);
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin', 255);
            $table->string('kebangsaan', 255);
            $table->text('alamat_rumah');
            $table->integer('kode_pos_rumah');
            $table->char('no_telp_rumah', 20);
            $table->char('no_hp', 20);
            $table->char('no_kantor', 20);
            $table->string('email', 255);
            $table->string('pendidikan_terakhir', 255);
            $table->string('kode_sekolah', 10);
            $table->string('nama_perusahaan', 255);
            $table->string('jabatan', 255);
            $table->text('alamat_perusahaan');
            $table->integer('kode_pos_perusahaan');
            $table->char('no_telp_perusahaan', 20);
            $table->string('email_perusahaan', 255);
            $table->char('no_fax_perusahaan', 20);
            $table->string('skema_sertifikasi', 255);
            $table->integer('id_klaster');
            $table->string('tujuan_asesmen');
            $table->text('bukti_kelengkapan_persyaratan_1');
            $table->text('bukti_kelengkapan_persyaratan_2');
            $table->text('bukti_kelengkapan_persyaratan_3');
            $table->text('bukti_kelengkapan_persyaratan_4')->nullable();
            $table->text('bukti_kompetensi_1');
            $table->text('bukti_kompetensi_2');
            $table->text('bukti_kompetensi_3');
            $table->text('bukti_kompetensi_4')->nullable();
            $table->string('status', 255);
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
        Schema::dropIfExists('registrations');
    }
}
