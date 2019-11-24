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
      'order_id',
      'type',
      'order_class',
      'billing_address',
      'contact_number',
      'contact_email',
      'contact_name',
      'related_item',
      'requestor',
      'requestor_id',
      'requestor_company_id',
      'requesition_notes',
      'vat',
      'amount',
      'request_date',
      'priority',
      'origin_id',
      'origin_name',
      'origin_type_name',
      'tax',
      'tax_percent',
      'tax_type',
      'status',
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
      return $this->hasOne('App\OrderType', 'id', 'type');
    }

    public function class()
    {
      return $this->hasOne('App\OrderClass','id', 'order_class');
    }
}
