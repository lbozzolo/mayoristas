<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContinentesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $descripcion = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
        DB::table('continentes')->insert([
            ['nombre' => 'Africa', 'descripcion' => $descripcion],
            ['nombre' => 'Asia', 'descripcion' => $descripcion],
            ['nombre' => 'Europa', 'descripcion' => $descripcion],
            ['nombre' => 'Oceanía', 'descripcion' => $descripcion],
            ['nombre' => 'Otros destinos', 'descripcion' => $descripcion],
            ['nombre' => 'Eventos deportivos', 'descripcion' => $descripcion],
        ]);
    }
}
