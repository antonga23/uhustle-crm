<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permissions extends Model
{
    protected $fillable = [
        'module_id',
        'role_id',
        'read',
        'write',
        'delete',
    ];
}
