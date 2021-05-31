<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vehicle;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Kendaraan barang 1', 'type' => 'barang', 'status' => 'available'],
            ['name' => 'Kendaraan penumpang 1', 'type' => 'penumpang', 'status' => 'available'],
            ['name' => 'Kendaraan barang 2', 'type' => 'barang', 'status' => 'available'],
        ];
        
        foreach ($data as $item) {
            Vehicle::create($item);
        }
    }
}
