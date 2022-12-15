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

        DB::table('users')->insert([
            'role' => '3',
            'name' => 'Ricardo Pannain',
            'email' => 'pannain@professor.com',
            'endereco' => '13087571',
            'CPF' => '111111',
            'password' => Hash::make('123456789'),
        ]);

        DB::table('users')->insert([
            'role' => '3',
            'name' => 'Leandro Xastre',
            'email' => 'xastre@professor.com',
            'endereco' => '13087571',
            'CPF' => '222222',
            'password' => Hash::make('123456789'),
        ]);

        DB::table('users')->insert([
            'role' => '3',
            'name' => 'Valdomiro',
            'email' => 'valdomiro@professor.com',
            'endereco' => '13087571',
            'CPF' => '333333',
            'password' => Hash::make('123456789'),
        ]);

        DB::table('users')->insert([
            'role' => '2',
            'name' => 'Alexandre',
            'email' => 'alexandre@aluno.com',
            'endereco' => '13087571',
            'CPF' => '444444',
            'filme' => 'Até o Ultimo Homem',
            'password' => Hash::make('123456789'),
        ]);

        DB::table('users')->insert([
            'role' => '2',
            'name' => 'Augusto',
            'email' => 'augusto@aluno.com',
            'endereco' => '13087571',
            'CPF' => '555555',
            'filme' => 'The Batman',
            'password' => Hash::make('123456789'),
        ]);

        DB::table('users')->insert([
            'role' => '2',
            'name' => 'Hugo',
            'email' => 'hugo@aluno.com',
            'endereco' => '13087571',
            'CPF' => '666666',
            'filme' => 'Pets',
            'password' => Hash::make('123456789'),
        ]);

        DB::table('users')->insert([
            'role' => '2',
            'name' => 'João',
            'email' => 'joao@aluno.com',
            'endereco' => '13087571',
            'CPF' => '777777',
            'filme' => 'One Piece',
            'password' => Hash::make('123456789'),
        ]);

	    DB::table('users')->insert([
            'role' => '2',
            'name' => 'Mattheus',
            'email' => 'mattheus@aluno.com',
            'endereco' => '13087571',
            'CPF' => '888888',
            'filme' => 'Barbie',
            'password' => Hash::make('123456789'),
        ]);
    }
}
