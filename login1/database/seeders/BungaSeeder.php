<?php

namespace Database\Seeders;

use App\Models\Bunga;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BungaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */

    public function run()
    {
        Bunga::create([
            'nama' => 'Anggrek',
            'deskripsi' => 'Bunga Anggrek Adalah Bunga cantik',
            'harga' => '50K',
            'image' => 'Aku',
        ]);
    }
}
