<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class calculate_order extends Model
{
    //
    protected $fillable = [
    'barcode',
    'nameproduct',
    'unit',
    'stock',
    'safety',
    'order',
    'unit_type',
    'order_comment',
    'time_order'
];
}
