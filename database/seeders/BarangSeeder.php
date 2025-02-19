<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Barang::create(['nama_barang' => 'Barang A', 'Stok' => 10, 'harga' => 10000]);
        // Barang::create(['nama_barang' => 'Barang B', 'Stok' => 100, 'harga' => 50000]);
        // Barang::create(['nama_barang' => 'Barang C', 'Stok' => 1000, 'harga' => 30000]);
    }
}
