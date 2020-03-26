<?php

use Illuminate\Database\Seeder;

class PrecalificateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ContactPrecalificate::class, 40)->create();
    }
}
