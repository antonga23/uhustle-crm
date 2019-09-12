<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Role extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $auditInclude = [
        // Audit all
    ];

    public function generateTags(): array
    {
        return [
            'roles',
        ];
    }

    protected $fillable = [
        'name', 'display_name', 'description', 'status'
    ];
    
    public function permissions()
    {
        return $this->hasMany(Permissions::class, 'role_id');
    }
}
