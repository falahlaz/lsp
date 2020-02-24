<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    protected $guarded = [
        'token'
    ];

    public function participant()
    {
        return $this->belongsTo('App\Participant', 'id_participant');
    }
}
