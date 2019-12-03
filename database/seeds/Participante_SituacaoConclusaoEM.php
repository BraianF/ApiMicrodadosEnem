<?php

use Illuminate\Database\Seeder;

class Participante_SituacaoConclusaoEM extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('participante_situacao_conclusao_em')->get()->count() == 0) {
            DB::table('participante_situacao_conclusao_em')->insert([
                ['descricao' => 'Já concluí o Ensino Médio'],
                ['descricao' => 'Estou cursando e concluirei o Ensino Médio em 2018'],
                ['descricao' => 'Estou cursando e concluirei o Ensino Médio após 2018'],
                ['descricao' => 'Não concluí e não estou cursando o Ensino Médio'],
            ]);
        } else {
            echo "\e[31mA tabela não está vazia. Nenhum dado foi adicionado.";
        }
    }
}
