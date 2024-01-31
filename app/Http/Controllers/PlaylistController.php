<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Playlist;
use App\Models\Song;

class PlaylistController extends Controller
{
    //
    public function index(){
        return view('playlists.index');
     }


     public function songs(Playlist $playlist){

        $songs = $playlist->songs;

         if ($songs->isEmpty()) {
             return redirect()->route('playlists.index')
                 ->with('error', 'Playlist honek ez ditu abestirik.');
         }else{
             return view('playlists.songs', compact('playlist','songs'));
         }
    }


    public function playlistssongs(){

        $playlists = Playlist::all();

        return view('playlists.playlistssongs', compact('playlists'));
    }

}
