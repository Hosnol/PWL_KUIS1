<?php

namespace Database\Seeders;

use App\Models\Supplier;
use App\Models\Pelanggan;
use App\Models\Pegawai;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //$this->call(BarangSeeder::class);
        //$this->call(SupplierSeeder::class);
        //Supplier::factory(20)->create();
        //$this->call(PelangganSeeder::class);
        //Pelanggan::factory(20)->create();
        //$this->call(PegawaiSeeder::class);
        Pegawai::factory(20)->create();
    }
}
