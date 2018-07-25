<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryMusic extends Model
{

	protected $table = "category_musics";
	protected $primaryKey = "id";

    public function category() {
		return $this->hasMany("App\Category", "id", "id");
	}
	public function music() {
		return $this->hasMany("App\Music", "id", "id");
	}
}
