<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class PermissionAttributes extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $auditInclude = [
        // Audit all
    ];

    protected $fillable = [
        'permission_id',
        'custom_field_id',
        'read',
        'write',
        'delete',
    ];
   
    public function generateTags(): array
    {
        return [
            'dialer_settings',
        ];
    }
}
