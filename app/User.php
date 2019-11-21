<?php

namespace App;

use App\Role;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role_id',
        'name',
        'lastname',
        'nickname',
        'email',
        'address',
        'work_number',
        'personal_number',
        'avatar',
        'rating',
        'notifications',
        'password',
        'activated',
        'email_verified_at',
        'monthly_target',
        'commission_structure',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function leads()
    {
        return $this->hasMany('App\UserLeads', 'user_id');
    }

    public function clients()
    {
        return $this->hasMany('App\UserClients', 'user_id');
    }

    public function role()
    {

        return $this->hasOne('App\Role', 'id','role_id');
    }
}
