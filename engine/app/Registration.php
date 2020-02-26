<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $fillable = [
        'nama_lengkap',
        'nik',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'kebangsaan',
        'alamat_rumah',
        'kode_pos_rumah',
        'no_telp_rumah',
        'no_hp',
        'no_kantor',
        'email',
        'pendidikan_terakhir',
        'nama_perusahaan',
        'jabatan',
        'alamat_perusahaan',
        'kode_pos_perusahaan',
        'no_telp_perusahaan',
        'email_perusahaan',
        'no_fax_perusahaan',
        'skema_sertifikasi',
        'id_klaster',
        'tujuan_asesmen',
        'bukti_kelengkapan_persyaratan_1',
        'bukti_kelengkapan_persyaratan_2',
        'bukti_kelengkapan_persyaratan_3',
        'bukti_kelengkapan_persyaratan_4',
        'bukti_kompetensi_1',
        'bukti_kompetensi_2',
        'bukti_kompetensi_3',
        'bukti_kompetensi_4',
        'status'
    ];

    public function cluster()
    {
        return $this->belongsTo('App\Cluster', 'id_klaster');
    }

    public function participant()
    {
        return $this->hasOne('App\Participant', 'id_registrasi');
    }

    public function school()
    {
        return $this->belongsTo('App\School', 'kode_sekolah');
    }
}
