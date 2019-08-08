<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
        
    protected $fillable = [
        'source',
        'title',
        'name',
        'surname',
        'phone_number',
        'email',
        'age',
        'gender',
        'city',
        'country',
        'account',
        'rating',
        'user_assigned',
        'user_created_id',
        'contact_date',
        'product_id',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_assigned', 'id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function source()
    {
        return $this->hasMany('App\LeadSource', 'id','source');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment', 'source_id');
    }
}
