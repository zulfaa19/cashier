<?php

namespace Database\Seeders;

use App\Models\DaftarMakananMinuman;
use Illuminate\Database\Seeder;

class DaftarMakananMinumanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $makanan = new DaftarMakananMinuman();
        $makanan->fill([
            'nama' => 'Nasi',
            'harga' => 5000
        ]);
        $makanan->save();

        $rendang = new DaftarMakananMinuman();
        $rendang->fill([
            'nama' => 'Rendang',
            'harga' => 7000
        ]);
        $rendang->save();

        $esteh = new DaftarMakananMinuman();
        $esteh->fill([
            'nama' => 'Es Teh',
            'harga' => 1500
        ]);
        $esteh->save();
    }
}
