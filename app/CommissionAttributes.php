<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommissionAttributes extends Model
{
  protected $fillable = [
    'comm_structure_id',
    'key',
    'value',
    'display_name',
  ];
}
