<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Company extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

   protected $fillable = [
    'name',
    'address',
    'province',
    'city',
    'tell',
    'fax',
    'email',
    'tax_number',
    'postal_address',
    'reg_number',
    'type_id',
    'code',
    'currency',
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
