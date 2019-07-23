<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Twillio extends Model
{
    protected $fillable = [
        'agent_name',
        'agent_id',
        'lead_id',
        'call_sid',
        'call_status',
        'answered',
        'sale'
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
