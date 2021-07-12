<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Said',
            'email' => 'said@said.com',
            'password' => Hash::make('12345678'),
            'url' => 'http://tareas.pixelweb.ml',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
            'name' => 'Nahum',
            'email' => 'nahum@nahum.com',
            'password' => Hash::make('12345678'),
            'url' => 'http://banco.pixelweb.ml',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
