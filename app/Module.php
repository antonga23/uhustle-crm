<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $fillable = [
        'tag',
        'display_name',
        'description',
    ];
   
    public function custom_fields()
    {
        return $this->hasMany(ModuleCustomFields::class, 'module_id');
    }
}
