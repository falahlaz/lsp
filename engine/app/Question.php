<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'id_elemen_komptensi',
        'no_kuk',
        'daftar_pertanyaan'
    ];

    public function element()
    {
        return $this->belongsTo('App\Element', 'id_elemen_kompetensi');
    }

    public function answer()
    {
        return $this->hasMany('App\Answer', 'id_pertanyaan');
    }

    public function assessorAnswer()
    {
        return $this->hasMany('App\Answer', 'id_pertanyaan');
    }
}
