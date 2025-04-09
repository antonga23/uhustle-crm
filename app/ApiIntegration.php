<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class ApiIntegration extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $auditInclude = [
        // Audit all
    ];

    public function generateTags(): array
    {
        return [
            'api',
        ];
    }

    protected $fillable = [
        'name'
    ];
    
    public function attributes()
    {
        return $this->hasMany(ApiIntegrationAttributes::class, 'api_id');
    }
}
