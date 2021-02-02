<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class plu_code extends Model
{
    protected $fillable = [
        'plu_code',
        'plu_code_name'
      ];


    public $timestamps = false;
}
