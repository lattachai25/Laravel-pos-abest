<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class master_product extends Model
{
    protected $fillable = [
        'id_plu',
        'id_sku',
        'plu_code_name',
        'price1',
        'price2',
        'price3',
        'price4',
        'model'
      ];

    public $timestamps = false;
}
