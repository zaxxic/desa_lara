<?php

namespace Database\Seeders;

use App\Models\register;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class RegisterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        register::create([
            'username' => 'dia',
            'email'    => 'pp@gmail.com',
            'password' => 'giugugiougugu',
            'gambar'   => 'adwaidwaiod',
            'provinsi' => 'jawa',
            'kabupaten'=> 'malang',
            'kecamatan'=> 'singosari',
            'desa'     => 'sidomulyo',
            'kode_pos' => '203819',
            'koordinat'=> 'adad',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);
    }
}
