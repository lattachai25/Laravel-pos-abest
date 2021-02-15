<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{

    protected $fillable = ['idplu','idsku','idprice','idbranche','username'];


    public function setCatAttribute($value)
    {
        $this->attributes['idplu'] = json_encode($value);
        $this->attributes['idsku'] = json_encode($value);
        $this->attributes['idprice'] = json_encode($value);
        $this->attributes['idbranche'] = json_encode($value);
        $this->attributes['username'] = json_encode($value);
    }
  

    public function getCatAttribute($value)
    {
        return $this->attributes['codeplu'] = json_decode($value);
    }




}
