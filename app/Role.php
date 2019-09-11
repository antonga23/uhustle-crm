<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'display_name', 'description', 'status'
    ];
    
    public function permissions()
    {
        return $this->hasMany(Permissions::class, 'role_id');
    }
}
