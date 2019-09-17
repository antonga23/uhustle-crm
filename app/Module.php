<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Module extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $auditInclude = [
        // Audit all
    ];

    protected $fillable = [
        'tag',
        'display_name',
        'description',
    ];
   
    public function module_fields()
    {
        return $this->hasMany(ModuleCustomFields::class, 'module_id');
    }

    public function generateTags(): array
    {
        return [
            'modules',
        ];
    }
}
