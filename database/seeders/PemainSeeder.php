<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pemain;

class PemainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        for ($i = 0; $i<10; $i++){
            Pemain::create([
                'nama_pemain'=>fake()->name(),
                'no_punggung'=>fake()->numberBetween(15-27),
                'posisi'=>"striker"
            ]);
        }

    }

}

