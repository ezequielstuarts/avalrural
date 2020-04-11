<?php

use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rol')->insert([
            'rol_id' => 1,
            'rol_type' => 1,
            'nombre' => 'Administrador'
        ]);
        DB::table('rol')->insert([
            'rol_id' => 2,
            'rol_type' => 0,
            'nombre' => 'Invitado'
        ]);
    }
}
