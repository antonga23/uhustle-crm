<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class ModuleCustomFields extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $auditInclude = [
        // Audit all
    ];

    protected $fillable = [
        'module_id',
        'name',
        'type',
        'options',
    ];

    public function generateTags(): array
    {
        return [
            'module_field',
        ];
    }
}
