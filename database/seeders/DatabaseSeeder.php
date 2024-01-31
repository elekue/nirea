<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

         $this->call(UserSeeder::class);
         $this->call(PlayListSeeder::class);
         $this->call(SongsSeeder::class);
         $this->call(UserPlaylistTableSeeder::class);
         $this->call(PodcastSeeder::class);
         $this->call(UserPodcastTableSeeder::class);

    }
}
