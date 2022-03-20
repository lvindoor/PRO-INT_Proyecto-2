<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('packages')->insert([
            'name' => 'Celular Xiaomi Redmi 9',
            'description' => 'Smartphone de 4G RAM, 64GB Interno y Procesador 4 nucleos',
            'price' => '120MX$',
            'quantity' => 1
        ]);

        DB::table('packages')->insert([
            'name' => 'impresora canon pixma mg3610',
            'description' => 'La impresora inalámbrica multifuncional de inyección de tinta PIXMA MG3610',
            'price' => '2500MX$',
            'quantity' => 3
        ]);

        DB::table('packages')->insert([
            'name' => 'Laptop HP 255 G7 ATHLON',
            'description' => 'Laptop Gamer HP con procesador AMD ATHLON 3020E, RAM de 8 GB y disco duro de 500 GB',
            'price' => '$9,249MX$',
            'quantity' => 2
        ]);

        DB::table('packages')->insert([
            'name' => 'Consola PlayStation 5 Estándar',
            'description' => 'Experimenta una velocidad sorprendente gracias a su SSD de alta velocidad',
            'price' => '13,500MX$',
            'quantity' => 5
        ]);

        DB::table('packages')->insert([
            'name' => 'AUDIFONOS BLUETOOTH APPLE AIRPODS',
            'description' => 'Alta potencia en sensores y una experencia inigualable',
            'price' => '12,300MX$',
            'quantity' => 1
        ]);
    }
}
