<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class ModuleItem extends Model
{
    use \OwenIt\Auditing\Auditable;

    protected $auditInclude = [
        // Audit all
    ];

    public function generateTags(): array
    {
        return [
            'module',
        ];
    }

    protected $fillable = [
        'module_id'
    ];   

    public function item_meta()
    {
        return $this->hasMany(ModuleItemMeta::class, 'item_id');
    }
}
