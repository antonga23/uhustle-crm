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

    protected $fillable = [
        'module_id',
        'role_id',
        'read',
        'write',
        'delete',
        'status',
    ];

    public function generateTags(): array
    {
        return [
            'permissions',
        ];
    }   

    public function attributes()
    {
        return $this->hasMany(PermissionAttributes::class, 'permission_id', 'id');
    }
}
