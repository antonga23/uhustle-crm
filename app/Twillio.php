<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Twillio extends Model
{
    protected $fillable = [
        'agent_name',
        'agent_id',
        'lead_id',
        'lead_name',
        'lead_country',
        'call_date_created',
        'call_duration',
        'call_from',
        'call_to',
        'call_price',
        'has_call_back',
        'call_sid',
        'call_status',
        'answered',
        'recording',
        'sale',
        'twilio_imported'
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
