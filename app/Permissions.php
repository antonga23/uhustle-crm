<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Permissions extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $auditInclude = [
        // Audit all
    ];

    public function generateTags(): array
    {
        return [
            'permissions',
        ];
    }

    protected $fillable = [
        'module_id',
        'role_id',
        'read',
        'write',
        'delete',
        'status',
    ];
}
