<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProfissionaisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profissionals')->runinsert({
            'nome' => 'Victor Oliveira',
            'sexo' => 'masculino',
            'funcao' => 'médico',
            'telefone' => '988260479';
        });
    }
}
