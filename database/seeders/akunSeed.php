<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class akunSeed extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        $user = [
            [
                'nip' => '1234567890',
                'username' => 'staff',
                'password' => bcrypt('staff'),
                'nama_lengkap' => 'Staff',
                'alamat' => 'Jl. Staff',
                'no_hp' => '081234567890',
                'jabatan' => 'staff',
                'foto' => 'default.png',
            ],
            [
                'nip' => '1234567891',
                'username' => 'lurah',
                'password' => bcrypt('lurah'),
                'nama_lengkap' => 'Lurah',
                'alamat' => 'Jl. Lurah',
                'no_hp' => '081234567891',
                'jabatan' => 'lurah',
                'foto' => 'default.png',
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
