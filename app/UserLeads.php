<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserLeads extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'lead_id',
        'assigned_by'
    ];

    public function leads()
    {
        return $this->hasMany('App\UserLeads', 'id');
    }

}
