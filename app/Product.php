<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Product extends Model implements Auditable
{
  use \OwenIt\Auditing\Auditable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'supplier_id',
        'category_id',
        'origin_type_id',
        'origin_id',
        'part_code',
        'model_number',
        'name',
        'description',
        'unit_cost',
        'rate',
        'current_stock',
        'reserved_stock',
        'available_stock',
        'tax_type',
        'status',
    ];

    public function generateTags(): array
    {
        return [
            'product',
        ];
    }
 
    public function category()
    {
        return $this->hasOne('App\ProductCategory', 'id','category_id');
    } 

    public function origin()
    {
        return $this->hasOne('App\Company','id', 'origin_id');
    }

    public function supplier()
    {
        return $this->hasOne('App\Supplier','id', 'supplier_id');
    }


}
