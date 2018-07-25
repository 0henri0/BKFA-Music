<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AlbumSinger extends Model
{
    public function singer()
    {
        return $this->belongsTo('App\Singer');
    }
}
