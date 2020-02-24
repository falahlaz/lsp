<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $fillable = [
        'id_registrasi',
        'id_asesor',
        'tempat_asesi',
        'tanggal_asesi',
        'ket_bukti_kelengkapan_persyaratan_1',
        'ket_bukti_kelengkapan_persyaratan_2',
        'ket_bukti_kelengkapan_persyaratan_3',
        'ket_bukti_kelengkapan_persyaratan_4',
        'ket_bukti_kompetensi_1',
        'ket_bukti_kompetensi_2',
        'ket_bukti_kompetensi_3',
        'ket_bukti_kompetensi_4',
        'status',
        'keterangan',
    ];

    public function asesor()
    {
        return $this->belongsTo('App\User', 'id_asesor');
    }

    public function registration()
    {
        return $this->belongsTo('App\Registration', 'id_registrasi');
    }

    public function cluster()
    {
        return $this->belongsTo('App\Cluster', 'id_klaster');
    }

    public function token()
    {
        return $this->hasOne('App\Token', 'id_participant');
    }

    public function answer()
    {
        return $this->hasMany('App\Answer', 'id_participant');
    }

    public function assessorAnswer()
    {
        return $this->hasMany('App\AssessorAnswer', 'id_participant');
    }
}
