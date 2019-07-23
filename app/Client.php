<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
        
    protected $fillable = [
        'title',
        'name',
        'surname',
        'gender',
        'age',
        'phone_number',
        'city',
        'country',
        'description',
        'status',
        'user_assigned_id',
        'user_created_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_assigned_id', 'id');
    }

    public function tasks()
    {
        return $this->hasMany('App\Tasks', 'client_id');
    }
}
