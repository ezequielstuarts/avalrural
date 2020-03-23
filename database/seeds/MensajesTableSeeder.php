<?php

use Illuminate\Database\Seeder;

class MensajesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Mensaje::class, 500)->create();
    }
}
