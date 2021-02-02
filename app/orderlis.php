<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orderlis extends Model
{
  protected $fillable = [
    'id_plu',
    'id_sku',
    'plu_code_name',
    'price1',
    'model'
  ];

public $timestamps = false;
}
