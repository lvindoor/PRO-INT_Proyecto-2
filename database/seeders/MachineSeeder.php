<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class MachineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('machines')->insert([
            'delivery_point_id' => 1,
            'model' => 'raspberry pi 3b+',
            'active' => true,
            'ip' => '0.0.0.0',
            'hostname' => 'gdl.com'
        ]);

        DB::table('machines')->insert([
            'delivery_point_id' => 2,
            'model' => 'raspberry pi 4',
            'active' => true,
            'ip' => '0.0.0.0',
            'hostname' => 'zpn.com'
        ]);

        DB::table('machines')->insert([
            'delivery_point_id' => 3,
            'model' => 'Odroid',
            'active' => false,
            'ip' => '0.0.0.0',
            'hostname' => 'tln.com'
        ]);
    }
}
