<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Playlist;

class UserPlaylistTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Obtener todos los users y playlists existentes
        $users = User::all();
        $playlists = Playlist::all();

        // Iterar sobre los users y asignar playlists aleatorios
        foreach ($users as $user){
            // Seleccionar playlists aleatorios para asignar al user
            $playlistsAsignadas = $playlists->random(rand(1, 3)); // Se asignarán de 1 a 3 playlists por user

            // Asignar los playlists seleccionados al user
            $user->playlists()->attach($playlistsAsignadas);
        };


    }
}
