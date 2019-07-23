<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'activity_log';

    protected $fillable = [
        'user_id',
        'text',
        'source_type',
        'source_id',
        'action',
    ];
    
    protected $guarded = ['id'];

    /**
     * Get the user that the activity belongs to.
     *
     * @return object
     */
    public function task()
    {
        return $this->belongsTo('App\Task', 'task_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
