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
        return $this->hasMany(ModuleCustomFields::class, 'module_id','id');
    }
      
    public function deals()
    {
        return $this->hasMany(Deal::class, 'lead_id','id');
    }

    public function winsta_uploads()
    {
        return $this->hasMany(WinstaImages::class, 'module_id', 'id');
    }

    public function generateTags(): array
    {
        return [
            'modules',
        ];
    }
}
