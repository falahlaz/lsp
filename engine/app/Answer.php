<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $table = 'participant_answers';

    protected $fillable = [
        'id_participant', 'id_pertanyaan', 'jawaban'
    ];

    public function participant()
    {
        return $this->belongsTo('App\Participant', 'id_participant');
    }

    public function question()
    {
        return $this->belongsTo('App\Question', 'id_pertanyaan');
    }
}
