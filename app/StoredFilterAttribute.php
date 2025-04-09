<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StoredFilterAttribute extends Model
{
    protected $fillable = [
        'stored_filter_id',
        'key',
        'value',
    ];
}
