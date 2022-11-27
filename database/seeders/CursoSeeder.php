<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cursos')->insert([
            'name' => 'Python',
            'descriptionfull' => 'Neste curso o aluno estará apto para criar e dar manutenção em código Python, além de entender melhor como implementar um código claro e simples no dia a dia. O curso é voltado para profissionais que estão iniciando seu aprendizado no uso do Python e para profissionais que querem se atualizar, pois, repassa detalhes da linguagem Python de forma rápida e simples. Também possui um material de apoio que estende os conhecimentos para outras áreas como engenharia de dados. Todo o material contém referências ao material original, além de oferecer dicas e informações extras sobre a linguagem Python.',
            'descriptionsimple' => 'Curso sobre Python, de forma rápida e simples.',
            'minimum' => 1,
            'maximum' => 4,
        ]);

        DB::table('cursos')->insert([
            'name' => 'Laravel',
            'descriptionfull' => 'O Laravel consiste em um framework back-end robusto que lhe oferece um time-to-market reduzido e também uma arquitetura de código muito organizada, o que facilita a manutenção de seu sistema e também o trabalho em equipe. Atualmente, o Laravel é considerado o maior Framework PHP existente. Esse status se dá devido à agilidade de programação de sistemas complexos envolvendo grande quantidade de recursos, tais como segurança, acesso a dados e arquitetura da aplicação. Todas essas características, que são básicas a qualquer sistema web, são fornecidas nativamente pelo Laravel de modo simples e intuitivo.',
            'descriptionsimple' => 'Curso sobre Laravel, o maior Framework PHP existente.',
            'minimum' => 1,
            'maximum' => 4,
        ]);

        DB::table('cursos')->insert([
            'name' => 'Java',
            'descriptionfull' => 'Curso Java, com aprofundamento em programação orientada a objeto, com certificado EETI CURSOS. Único curso com certificado.',
            'descriptionsimple' => 'Curva Java orientado a objeto.',
            'minimum' => 1,
            'maximum' => 4,
        ]);

        DB::table('cursos')->insert([
            'name' => 'C#',
            'descriptionfull' => 'Neste curso você vai aprender tudo sobre Programação Orientada a Objetos utilizando C#. Vamos começar desde o básico, com exemplos bem simples e didáticos, e daí vamos gradualmente avançando, até mergulharmos em tópicos aprofundados tais como interfaces, polimorfismo, princípios SOLID, padrões de projeto, generics, expressões lambda, delegates, LINQ e muito mais.',
            'descriptionsimple' => 'Programação Orientada a Objetos utilizando C#.',
            'minimum' => 1,
            'maximum' => 4,
        ]);
    }
}
