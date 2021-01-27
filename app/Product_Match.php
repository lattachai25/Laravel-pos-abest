<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_Match extends Model
{
    protected $fillable = [
        'id',
        'id_partner',
        'name_part',
        'id_product',
        'name_product',
        'price'
      ];


    public $timestamps = false;
}
