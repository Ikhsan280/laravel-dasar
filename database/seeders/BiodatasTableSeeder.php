<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BiodatasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $biodatas = [
            ['name' => 'Kusno', 'bornDate' => '1999-10-10', 'gender' => 'Laki-laki', 'address' => 'Bandung', 'religion' => 'Islam', 'age' => '17', 'hobi' => 'Mancing'],
            ['name' => 'Kardi', 'bornDate' => '2000-09-09', 'gender' => 'Laki-laki', 'address' => 'Jakarta', 'religion' => 'Islam', 'age' => '20', 'hobi' => 'cating'],
            ['name' => 'Kartini', 'bornDate' => '1998-08-08', 'gender' => 'Perempuan', 'address' => 'Solo', 'religion' => 'Islam', 'age' => '23', 'hobi' => 'Gamers'],
            ['name' => 'Kartika', 'bornDate' => '1980-04-03', 'gender' => 'Perempuan', 'address' => 'Aceh', 'religion' => 'Islam', 'age' => '15', 'hobi' => 'Tiktokan'],
            ['name' => 'wanti', 'bornDate' => '2004-01-02', 'gender' => 'Perempuan', 'address' => 'Batak', 'religion' => 'Islam', 'age' => '30', 'hobi' => 'Nyanyi'],

        ];
// masukkan data ke database
        DB::table('biodatas')->insert($biodatas);

    }
}
