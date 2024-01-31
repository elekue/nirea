<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Playlist;


class Song extends Model
{
    use HasFactory;

    protected $table = 'songs';

    public function playlist()
    {
        return $this->belongsTo(Playlist::class);
    }

}
