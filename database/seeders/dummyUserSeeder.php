<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class dummyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama_lengkap' => 'Eki ni bos',
                'no_hp' => '081807058847',
                'alamat'=> 'satelit palapa',
                'email' => 'eki@gmail.com',
                'password' => bcrypt('eki123'),
                'role' => 'admin'
            ]
        ];

        User::insert($data);
    }
}
