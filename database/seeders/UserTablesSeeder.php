<?php

namespace Database\Seeders;
use App\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name'          => 'Abiola Ibrahim',
            'email'         => 'Abiola_Ibrahim@gmail.com',
            'password'      =>  Hash::make('password'),
            'remember_token'=>  str_random(10),              Webslesson

        ]);
    }
}
