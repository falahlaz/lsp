<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ValidAnswer extends Model
{
    protected $table = 'valid_answer';

    protected $fillable = [
        'jawaban'
    ];

    public function assessorAnswer()
    {
        return $this->hasMany('App\AssessorAnswer', 'id_jawaban');
    }
}
