<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Ahmad Hosen',
                'gender' => 'Pria',
                'birth_date' => '1988-04-14',
                'education' => 'SMA',
                'major' => 'SMK Mesin',
                'email' => 'ahmad.hosen@example.com',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'Akbar Muhamad Jaya',
                'gender' => 'Pria',
                'birth_date' => '2005-02-14',
                'education' => 'SMA',
                'major' => 'SMK ADMINISTRASI',
                'email' => 'akbar.muhammad@example.com',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'Amir Hamza',
                'gender' => 'Pria',
                'birth_date' => '1980-12-30',
                'education' => 'SMA',
                'major' => 'SMK LISTRIK',
                'email' => 'amir.hamza@example.com',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'Dede Handoko',
                'gender' => 'Pria',
                'birth_date' => '1994-12-15',
                'education' => 'SMA',
                'major' => 'SMK MESIN',
                'email' => 'dede.handoko@example.com',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'Fajar Amru Alam',
                'gender' => 'Pria',
                'birth_date' => '2004-04-07',
                'education' => 'SMA',
                'major' => "SMA MIPA",
                'email' => 'fajar.amru@example.com',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'Ilham Sidiq',
                'gender' => 'Pria',
                'birth_date' => '2000-08-14',
                'education' => 'D3',
                'major' => 'TEKNIK KIMIA',
                'email' => 'ilham.sidiq@example.com',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'M Rizki Ramadhan',
                'gender' => 'Pria',
                'birth_date' => '2001-11-18',
                'education' => 'SMA',
                'major' => "SMA MIPA",
                'email' => 'rizki.ramadhan@example.com',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'Nur Fitriyani Hardi',
                'gender' => 'Wanita',
                'birth_date' => '1990-03-27',
                'education' => 'S1',
                'major' => 'MANAJEMEN',
                'email' => 'nur.fitriyani@example.com',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'Rafli Molana Sembiring',
                'gender' => 'Pria',
                'birth_date' => '2000-12-01',
                'education' => 'SMA',
                'major' => 'SMK Mesin',
                'email' => 'rafli.molana@example.com',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'Razendra Alam',
                'gender' => 'Pria',
                'birth_date' => '2004-04-20',
                'education' => 'SMA',
                'major' => "SMA IPA",
                'email' => 'razendra.alam@example.com',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'Zakiuddin Hibatullah Santoso',
                'gender' => 'Pria',
                'birth_date' => '1999-11-01',
                'education' => 'SMA',
                'major' => "SMA IPA",
                'email' => 'zakiuddin.hibatullah@example.com',
                'password' => Hash::make('password123'),
            ],
        ];

        DB::table('users')->insert($data);
    }
}
