<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = [
        'sku',
        'name_product',
        'unit',
        'name_type',
        'price',
        'change_price'
      ];


    public $timestamps = false;
}
