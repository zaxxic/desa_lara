<?php

namespace Database\Seeders;

use App\Models\location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        location::create([
            'provinsi'  => 'Jatim',
            'kabupaten' => 'Malang',
            'kecamatan' => 'Singosari',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);
    }
}
