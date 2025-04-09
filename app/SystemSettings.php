<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SystemSettings extends Model
{
    protected $fillable = [
        'system_setting',
        'user_id',
        'setting',
        'value',
        'previous_value',
        'modified_by',
        'applies_to_role',
    ];

    
    public function user()
    {
        return $this->hasOne('App\User', 'id','modified_by');
    }
}
