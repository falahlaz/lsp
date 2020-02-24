<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cluster extends Model
{
    protected $fillable = [
        'no_cluster', 'judul_cluster', 'id_jurusan'
    ];

    public function department()
    {
        return $this->belongsTo('App\Department', 'id_jurusan');
    }

    public function competency()
    {
        return $this->hasMany('App\Competence', 'id_klaster');
    }

    public function registration()
    {
        return $this->hasMany('App\Registration', 'id_klaster');
    }

    public function participant()
    {
        return $this->hasMany('App\Participant', 'id_klaster');
    }
}
