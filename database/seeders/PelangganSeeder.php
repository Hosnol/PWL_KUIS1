<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pelanggan')->insert([
            'nama_pelanggan' =>  'Joko purnomo',
            'jk'=> 'Laki-laki',
            'no_telepon' =>  '085677821523',
            'alamat' => 'Jl. Rembulan atas No.30' 
            ]);
    }
}
