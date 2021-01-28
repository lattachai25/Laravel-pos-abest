<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PartnerWidthProduct extends Model
{
    
    protected $fillable = [
        'id_partner',
        'name_part',
        'id_product',
        'name_product'
      ];


    public $timestamps = false;
}
