<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sku_code extends Model
{
    protected $fillable = [
        'id_sku',
        'sku_code',
        'sku_code_name'
      ];


    public $timestamps = false;
}
