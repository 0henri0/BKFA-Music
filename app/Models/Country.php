<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function category()
    {
        return $this->hasMany('App\Category');
    }
    public function singer()
    {
        return $this->hasMany('App\Singer');
    }
}
