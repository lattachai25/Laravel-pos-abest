<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sour_partner extends Model
{
    //
    //
    protected $fillable = [
        'id_partner',
        'name_part',
        'id_type_part',
        'phone',
        'contact_person',
        'vegetable',
        'thai_fruits',
        'fruit_outside',
        'status'

      ];


    public $timestamps = false;



}
