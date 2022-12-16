<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role' => '1',
            'name' => 'Secretaria',
            'email' => 'secretaria@secretaria.com',
            'endereco' => '13087571',
            'CPF' => 'N/A',
            'password' => Hash::make('123456789'),
        ]);
    }
}
