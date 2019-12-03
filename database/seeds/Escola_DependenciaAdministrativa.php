<?php

use Illuminate\Database\Seeder;

class Escola_DependenciaAdministrativa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('escola_dependencia_administrativa')->get()->count() == 0) {
            DB::table('escola_dependencia_administrativa')->insert([
                ['descricao' => 'Federal'],
                ['descricao' => 'Estadual'],
                ['descricao' => 'Municipal'],
                ['descricao' => 'Privada']
            ]);
        } else {
            echo "\e[31mA tabela não está vazia. Nenhum dado foi adicionado.";
        }
    }
}
