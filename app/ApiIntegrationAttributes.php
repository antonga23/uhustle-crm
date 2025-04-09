<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class ApiIntegrationAttributes extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $auditInclude = [
        // Audit all
    ];

    public function generateTags(): array
    {
        return [
            'api_attribute',
        ];
    }

    protected $fillable = [
        'api_id',
        'key',
        'value',
        'display_name',
    ];
}
