<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pegawai')->insert([
            'nama_pegawai' =>  'Agung Mulya',
            'jk'=> 'Laki-laki',
            'jabatan' => 'Cashier',
            'no_telepon' =>  '083801885301',
            'alamat' => 'Jl. Rambut Kipas No.25' 
            ]); 
    }
}
