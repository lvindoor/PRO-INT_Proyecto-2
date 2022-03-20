<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'Supervisor'
        ]);

        DB::table('roles')->insert([
            'name' => 'Trabajador'
        ]);

        DB::table('roles')->insert([
            'name' => 'Administrador'
        ]);

        DB::table('roles')->insert([
            'name' => 'Super Usuario'
        ]);
    }
}
