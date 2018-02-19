<?php

use Illuminate\Database\Seeder;

class AddHomeToContinentesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('continentes')->insert([
            ['nombre' => 'Home'],
        ]);

    }
}
