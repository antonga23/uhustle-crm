<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Order extends Model implements Auditable
{
  use \OwenIt\Auditing\Auditable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'type_id',
      'class_id',
      'origin_id',
      'requestor_id',
      'billing_address',
      'contact_number',
      'contact_person',
      'amount',
      'vat_mount',
      'vat',
      'total_amount',
      'status'
    ];

    public function generateTags(): array
    {
        return [
          'order',
        ];
    }

    public function items()
    {
      return $this->hasMany('App\OrderItem', 'order_id','id');
    }

    public function type()
    {
      return $this->hasOne('App\OrderType', 'type_id','id');
    }

    public function class()
    {
      return $this->hasOne('App\OrderClass', 'class_id','id');
    }
}
