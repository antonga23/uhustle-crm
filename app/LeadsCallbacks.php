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

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function lead()
    {
        return $this->belongsTo('App\Lead', 'lead_id');
    }
}
