<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserClients extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'client_id',
        'assigned_by'
    ];

    public function clients()
    {
        return $this->hasMany('App\Clients', 'id');
    }
}
