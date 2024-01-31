<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;

class SongController extends Controller
{
    //

    // public function index(){

    //     $songs = Song::all();
    //     //$alumnos = Alumno::orderBy('id','desc')->paginate();
    //     return view('playlists.index', compact('playlists'));
    // }

    public function bilatu(Request $request){
        $query = $request->input('query');

        // $canciones = Song::where('nombre', 'LIKE', "%$query%")
        //                 ->orWhere('artista', 'LIKE', "%$query%")
        //                 ->get();

        $canciones = Song::where('nombre', 'LIKE', "%$query%")
                            ->get();

        return view('songs.bilatu', compact('canciones', 'query'));
    }

}
