<?php

use Illuminate\Database\Seeder;

class Escola_SituacaoFuncionamento extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('escola_situacao_funcionamento')->get()->count() == 0) {
            DB::table('escola_situacao_funcionamento')->insert([
                ['descricao' => 'Em atividade'],
                ['descricao' => 'Paralisada'],
                ['descricao' => 'Extinta'],
            ]);
        } else {
            echo "\e[31mA tabela não está vazia. Nenhum dado foi adicionado.";
        }
    }
}
