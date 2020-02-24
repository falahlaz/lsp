<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssessorAnswer extends Model
{
    protected $table = 'assessor_answers';

    protected $fillable = [
        'id_participant', 'id_asesor', 'id_pertanyaan', 'jawaban'
    ];

    public function participant()
    {
        return $this->belongsTo('App\Participant', 'id_participant');
    }

    public function asesor()
    {
        return $this->belongsTo('App\User', 'id_asesor');
    }

    public function question()
    {
        return $this->belongsTo('App\Question', 'id_pertanyaan');
    }

    public function validAnswer()
    {
        return $this->belongsTo('App\ValidAnswer', 'id_jawaban');
    }
}
