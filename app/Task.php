<?php

namespace App;

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'title',
        'description',
        'status',
        'user_assigned_id',
        'user_created_id',
        'client_id',
        'deadline'
    ];
    
    protected $dates = ['deadline'];

    protected $hidden = ['remember_token'];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_assigned_id');
    }

    public function invoice()
    {
        return $this->belongsTo('App\Invoice');
    }

    public function client()
    {
        return $this->belongsTo('App\Client', 'client_id');
    }

    public function creator()
    {
        return $this->belongsTo('App\User', 'user_created_id');
    }

    public function comments()
    {
        return $this->morphMany('App\Comment', 'source');
    }

    public function activities()
    {
        return $this->hasMany('App\Activity', 'source_id');
    }
        
    public function getDaysUntilDeadlineAttribute()
    {
        return Carbon::now()->startOfDay()->diffInDays($this->deadline, false); // if you are past your deadline, the value returned will be negative.
    }

    public function getAssignee()
    {
        return User::select('id','name','email')->findOrFail($this->user_assigned_id);
    }

    public function getCreator()
    {
        return User::select('id','name','email')->findOrFail($this->user_created_id);
    }

    public function addComment($reply)
    {
        $reply = $this->comments()->create($reply);
        return $reply;
    }
}
