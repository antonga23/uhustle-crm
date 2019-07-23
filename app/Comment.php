<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'user_id',
        'user_name',
        'description',
        'comment_type',
        'source_type',
        'source_id',
    ];
    protected $hidden = ['remember_token'];


    public function lead()
    {
        return $this->belongsTo('App\Lead', 'source_id', 'id');
    }
    
    public function task()
    {
        return $this->belongsTo('App\Task', 'source_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function mentionedUsers()
    {
        preg_match_all('/@([\w\-]+)/', $this->description, $matches);
 
        return $matches[1];
    }
}
