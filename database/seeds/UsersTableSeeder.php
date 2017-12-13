<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nombre' => 'Lucas',
            'apellido' => 'Bozzolo',
            'email' => 'lucasbozzolo@hotmail.com',
            'password' => bcrypt('lucas999'),
            'estado' => '1',
            'rol' => '0',
        ]);
    }
}
