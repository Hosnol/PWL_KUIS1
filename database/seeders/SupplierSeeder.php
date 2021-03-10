<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('supplier')->insert([
            'nama_supplier' =>  'Iwan Setiawan',
            'no_telepon'=> '085334120756',
            'alamat' => 'Jl. Kramat Timur Situbondo'
            ]);
    }
}
