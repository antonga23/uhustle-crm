<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    protected $fillable = [
      'lead_id',
      'agent_id',
      'agent_name',
      'deal_name',
      'closing_date',
      'type',
      'lead_source',
      'amount',
      'description',
      'stage',
      'probability',
      'expected_revenue',
      'contact_name',
      'contact_number',
      'status',
    ];


    public function lead()
    {
        return $this->belongsTo('App\Lead', 'lead_id');
    }
}
