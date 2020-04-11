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
        $this->call(UsersSeeder::class);
        $this->call(RolSeeder::class);
        $this->call(NoticiasSeeder::class);
        $this->call(MensajesTableSeeder::class);
        $this->call(PrecalificateTableSeeder::class);
    }
}
