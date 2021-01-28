<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class plu_code extends Model
{
    protected $fillable = [
        'id_plu',
        'plu_code',
        'plu_code_name'
      ];


    public $timestamps = false;
}
