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
        ]);
        DB::table('users')->insert([
            'name' => 'Ezequiel',
            'email' => 'stuartsezequiel@gmail.com',
            'password' => $hashed,
        ]);
    }
}
