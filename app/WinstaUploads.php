<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WinstaUploads extends Model
{
    protected $fillable = [
        'user_assigned_id',
        'module_id',
        'file_name'
    ];

}
