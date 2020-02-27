<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $table = 'school_lists';

    protected $fillable = [
        'id', 'kode_sekolah', 'nama_sekolah'
    ];

    public function registration()
    {
        return $this->hasMany('App\Registration', 'kode_sekolah', 'kode_sekolah');
    }

    public function participant()
    {
        return $this->hasMany('App\Participant', 'kode_sekolah', 'kode_sekolah');
    }
}
