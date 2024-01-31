<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $user = new User();
        $user->name = 'Jone';
        $user->lastname = 'Martinez';
        $user->email = 'jone.m@fptxurdinaga.com';
        $user->password = 'jone123';

        $user->save();


        $user = new User();
        $user->name = 'Laura';
        $user->lastname = 'Folgado';
        $user->email = 'laura.f@fptxurdinaga.com';
        $user->password = 'laura123';

        $user->save();

        $user = new User();
        $user->name = 'Mikel';
        $user->lastname = 'Atxa';
        $user->email = 'mikelatxa@gmail.com';
        $user->password = 'mikel123';

        $user->save();


    }
}
