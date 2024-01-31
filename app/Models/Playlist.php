<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Song;
use App\Models\User;

class Playlist extends Model
{
    use HasFactory;
    protected $table = 'playlists';

    public function songs()
    {
        return $this->hasMany(Song::class);
    }

    public function users(){
        return $this->belongsToMany(User::class);
    }

}
