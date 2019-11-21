<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Supplier extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

   protected $fillable = [
    'name',
    'address',
    'province',
    'city',
    'tell',
    'fax',
    'tax_number',
    'type_id',
    'code',
    'status'
   ];

   public function generateTags(): array
   {
       return [
           'company',
       ];
   }

   public function type()
   {
       return $this->belongsTo('App\CompanyType', 'type_id');
   }
}
