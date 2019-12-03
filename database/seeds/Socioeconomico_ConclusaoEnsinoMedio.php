<?php

use Illuminate\Database\Seeder;

class Socioeconomico_ConclusaoEnsinoMedio extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('socioeconomico_conclusao_ensino_medio')->get()->count() == 0) {
            DB::table('socioeconomico_conclusao_ensino_medio')->insert([
                [
                    'opcao' => 'A',
                    'descricao' => 'Já concluí o Ensino Médio.'
                ],
                [
                    'opcao' => 'B',
                    'descricao' => 'Estou cursando e concluirei o Ensino Médio em 2018.'
                ],
                [
                    'opcao' => 'C',
                    'descricao' => 'Estou cursando e concluirei o Ensino Médio após 2018.'
                ],
                [
                    'opcao' => 'D',
                    'descricao' => 'Não concluí e não estou cursando o Ensino Médio.'
                ],
            ]);
        } else {
            echo "\e[31mA tabela não está vazia. Nenhum dado foi adicionado.";
        }
    }
}
