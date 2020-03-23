<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hashed = Hash::make('Corrientes2335');
        DB::table('users')->insert([
            'name' => 'Ezequiel',
            'email' => 'elzeke55@gmail.com',
            'password' => $hashed,
            'rol' => 1,
            ]);
        DB::table('users')->insert([
            'name' => 'Ezequiel',
            'email' => 'stuartsezequiel@gmail.com',
            'password' => $hashed,
            'rol' => 1,
        ]);
        DB::table('users')->insert([
            'name' => 'Eze Guest',
            'email' => 'ezequiel@gmail.com',
            'password' => $hashed,
            'rol' => 2,
        ]);
    }
}
