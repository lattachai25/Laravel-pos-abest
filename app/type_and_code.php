<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class type_and_code extends Model
{
    protected $fillable = ['baecode','type'];

    public $timestamps = false;
}
