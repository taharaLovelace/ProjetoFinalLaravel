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
            'endereco' => '13086130',
            'CPF' => 'N/A',
            'filme' => 'N/A',
            'password' => Hash::make('123456789'),
        ]);

        DB::table('users')->insert([
            'role' => '3',
            'name' => 'Professor 1',
            'email' => 'professor1@professor.com',
            'endereco' => '13086130',
            'CPF' => '111111',
            'filme' => 'N/A',
            'password' => Hash::make('123456789'),
        ]);

        DB::table('users')->insert([
            'role' => '3',
            'name' => 'Professor 2',
            'email' => 'professor2@professor.com',
            'endereco' => '13086130',
            'CPF' => '222222',
            'filme' => 'N/A',
            'password' => Hash::make('123456789'),
        ]);

        DB::table('users')->insert([
            'role' => '3',
            'name' => 'Professor 3',
            'email' => 'professor3@professor.com',
            'endereco' => '13086130',
            'CPF' => '333333',
            'filme' => 'N/A',
            'password' => Hash::make('123456789'),
        ]);

        DB::table('users')->insert([
            'role' => '2',
            'name' => 'Aluno 1',
            'email' => 'aluno1@aluno.com',
            'endereco' => '13086130',
            'CPF' => '211111',
            'filme' => 'Smurfs',
            'password' => Hash::make('123456789'),
        ]);

        DB::table('users')->insert([
            'role' => '2',
            'name' => 'Aluno 2',
            'email' => 'aluno2@aluno.com',
            'endereco' => '13086130',
            'CPF' => '211112',
            'filme' => 'Blade Runner',
            'password' => Hash::make('123456789'),
        ]);

        DB::table('users')->insert([
            'role' => '2',
            'name' => 'Aluno 3',
            'email' => 'aluno3@aluno.com',
            'endereco' => '13086130',
            'CPF' => '211113',
            'filme' => 'Shrek',
            'password' => Hash::make('123456789'),
        ]);

        DB::table('users')->insert([
            'role' => '2',
            'name' => 'Aluno 4',
            'email' => 'aluno4@aluno.com',
            'endereco' => '13086130',
            'CPF' => '211114',
            'filme' => 'One Piece',
            'password' => Hash::make('123456789'),
        ]);
    }
}
