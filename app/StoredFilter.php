<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StoredFilter extends Model
{
    protected $fillable = [
        'user_id',
        'type',
        'filter_title',
    ];
    
    public function attributes()
    {
        return $this->hasMany(StoredFilterAttribute::class, 'stored_filter_id');
    }
}
