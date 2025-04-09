<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class OrderItem extends Model implements Auditable
{
  use \OwenIt\Auditing\Auditable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      "id",
      "order_id",
      "PartType",
      "PartCode",
      "Description",
      "Priority",
      "WarehouseName",
      "Quantity",
      "UnitCost",
      "TaxRate",
      "Vat",
      "Total",
    ];

    public function generateTags(): array
    {
        return [
          'order_item',
        ];
    }

    public function order()
    {
        return $this->belongsTo('App\Order', 'order_id');
    }

}
