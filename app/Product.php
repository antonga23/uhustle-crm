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
        'origin_id',
        'code',
        'name',
        'description',
        'unit_cost',
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
        return $this->hasOne('App\ProductCategory', 'category_id','id');
    } 

    public function origin()
    {
        return $this->hasOne('App\Company', 'origin_id', 'id');
    }

    public function supplier()
    {
        return $this->hasOne('App\Supplier', 'supplier_id','id');
    }


}
