<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon;

class Lead extends Model
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
        'is_client',
        'product_id',
        'product_variant',
        'status',
        'start_date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_assigned');
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'user_created_id');
    }

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function activity()
    {
        return $this->morphMany(Activity::class, 'source');
    }

    public function call_backs()
    {
        return $this->hasMany(LeadsCallbacks::class, 'lead_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function lead_source()
    {
        return $this->belongsTo('App\LeadSource', 'source');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment', 'source_id', 'id');
    }
}
