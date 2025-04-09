<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class CompanyType extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

   protected $fillable = [
    'name',
    'description',
    'status'
   ];

   public function generateTags(): array
   {
       return [
          'company_type',
       ];
   }

}