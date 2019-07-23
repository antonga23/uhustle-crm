<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvoiceLine extends Model
{
    protected $fillable = [
        'type',
        'quantity',
        'task_id',
        'title',
        'comment',
        'price',
        'invoice_id'
    ];

    public function tasks()
    {
        return $this->belongsTo('App\Task');
    }

    public function invoice()
    {
        return $this->belongsTo('App\Invoice');
    }

    public function task()
    {
        return $this->invoice->task;
    }
}
