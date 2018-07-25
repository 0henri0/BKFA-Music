<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Singer extends Model
{
    public function countries()
    {
        return $this->belongsTo('App\Country');
    }
}
