<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sku_code extends Model
{
    protected $fillable = [
        'sku_code',
        'sku_code_name'
      ];


    public $timestamps = false;
}
