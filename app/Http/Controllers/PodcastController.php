<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\Models\Podcast;
use App\Models\User;

class PodcastController extends Controller
{

    public function index(){

        $podcasts = Podcast::all();
        $usuario = 0;
        $busqueda = 0;

        return view('podcasts.index', compact('podcasts','usuario','busqueda'));
    }

    public function login(Request $request){

        $email = $request->email;
        $password = $request->password;

        // Buscar usuario por email
        $usuario = User::where('email', $email)
                        ->first();

        if ($usuario && Hash::check($password, $usuario->password)) {
            // El email y la contraseña coinciden
            $busqueda = 1;
        } else {
            // No se encontró el usuario o la contraseña no coincide
            $busqueda = 2;
        }


        // if ($usuario == null)
        //     $busqueda = 2;
        // else
        //     $busqueda = 1;

        $podcasts = Podcast::all();

        return view('podcasts.index', compact('podcasts','usuario','busqueda'));
    }

}
