<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'no_reg', 'nama_lengkap', 'email', 'password', 'role', 'id_jurusan'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function department()
    {
        return $this->belongsTo('App\Department', 'id_jurusan');
    }

    public function participant()
    {
        return $this->hasMany('App\Participant', 'id_asesor');
    }

    public function assessorAnswer()
    {
        return $this->hasMany('App\AssessorAnswer', 'id_asesor');
    }
}
