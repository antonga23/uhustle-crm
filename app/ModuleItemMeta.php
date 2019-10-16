<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class ModuleItemMeta extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $auditInclude = [
        // Audit all
    ];

    public function generateTags(): array
    {
        return [
            'module_fields',
        ];
    }

    protected $fillable = [
        'item_id',
        'custom_field_id',
        'custom_field_value'
    ];   

}
