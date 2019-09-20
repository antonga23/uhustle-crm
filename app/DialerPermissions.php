<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class DialerPermissions extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $auditInclude = [
        // Audit all
    ];

    protected $fillable = [
        'role_id',
        'disabled',
        'barge',
        'whisper',
    ];
   
    public function generateTags(): array
    {
        return [
            'dialer_settings',
        ];
    }
}