<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LeadsCallbacks extends Model
{
    protected $fillable = [
        'user_id',
        'lead_id',
        'call_date',
        'call_time',
        'notes',
        'status',
        'call_sid'
    ];

}
