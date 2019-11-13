<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commission extends Model
{
  protected $fillable = [
    'commision_structure',
  ];

  public function attributes()
  {
      return $this->hasMany(CommissionAttributes::class, 'comm_structure_id');
  }
}
