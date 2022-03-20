<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DeliveryPointSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('delivery_points')->insert([
            'location' => 'Guadajalara'
        ]);

        DB::table('delivery_points')->insert([
            'location' => 'Zapopan'
        ]);

        DB::table('delivery_points')->insert([
            'location' => 'Tonala'
        ]);
    }
}
