<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Element extends Model
{
    protected $table = 'competency_element';

    protected $fillable = [
        'id_kompetensi',
        'elemen_kompetensi'
    ];

    public function competency()
    {
        return $this->belongsTo('App\Competence', 'id_kompetensi');
    }

    public function question()
    {
        return $this->hasMany('App\Question', 'id_elemen_kompetensi');
    }
}
