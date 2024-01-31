<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Podcast;

class UserPodcastTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        // Obtener todos los users y podcasts existentes
        $users = User::all();
        $podcasts = Podcast::all();

        // Iterar sobre los users y asignar podcasts aleatorios
        foreach ($users as $user){
            // Seleccionar podcasts aleatorios para asignar al user
            $podcastAsignados = $podcasts->random(rand(1, 8)); // Se asignarán de 1 a 8 podcasts por user

            // Asignar los podcasts seleccionados al user
            $user->podcasts()->attach($podcastAsignados);
        };
    }
}
