<?php

use Illuminate\Database\Seeder;

class RolNameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('rol')->insert([
            'rol_id' => 3,
            'rol_type' => 0,
            'rol_name' => 0,
        ]);
    }
}
