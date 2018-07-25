<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "Categories";
	protected $primaryKey = "id";

    public function countries()
    {
        return $this->belongsTo('App\Country');
    }
    public function album_singers()
    {
        return $this->hasMany('App\AlbumSinger');
    }
}
