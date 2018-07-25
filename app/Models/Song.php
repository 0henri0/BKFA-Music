<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function albumUsers()
    {
        return $this->belongsToMany('App\AlbumUser', 'album_user_song', 'song_id', 'album_user_id');
    }
    public function albumSingers()
    {
        return $this->belongsToMany('App\AlbumSinger', 'album_singer_song', 'song_id', 'album_singer_id');
    }
    public function singers()
    {
        return $this->belongsToMany('App\Singer', 'song_singer', 'song_id', 'singer_id');
    }
    public function categories()
    {
        return $this->belongsToMany('App\Category', 'category_song', 'song_id', 'category_id');
    }
}
