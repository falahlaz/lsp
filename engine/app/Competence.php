<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competence extends Model
{
    protected $fillable = [
        'kode_unit', 'judul_unit', 'jenis_standar', 'id_klaster'
    ];

    public function cluster()
    {
        return $this->belongsTo('App\Cluster', 'id_klaster');
    }

    public function element()
    {
        return $this->hasMany('App\Element', 'id_kompetensi');
    }
}
