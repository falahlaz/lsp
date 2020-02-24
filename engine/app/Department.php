<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        'nama_jurusan', 'level_jurusan'
    ];

    public function cluster()
    {
        return $this->hasMany('App\Cluster', 'id_jurusan');
    }

    public function user()
    {
        return $this->hasMany('App\User', 'id_jurusan');
    }
}
