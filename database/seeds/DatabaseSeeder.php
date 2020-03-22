<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        $this->call(NoticiasSeeder::class);
        $this->call(UsersSeeder::class);
        //$this->call(MensajesTableSeeder::class);
        //$this->call(PrecalificateTableSeeder::class);
    }
}
