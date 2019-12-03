<?php

use Illuminate\Database\Seeder;

class Prova_Redacao_Situacao extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('prova_redacao_situacao')->get()->count() == 0) {
            DB::table('prova_redacao_situacao')->insert([
                ['descricao' => 'Sem problemas'],
                ['descricao' => 'Anulada'],
                ['descricao' => 'Cópia Texto Motivador'],
                ['descricao' => 'Em Branco'],
                ['descricao' => 'Fuga ao tema'],
                ['descricao' => 'Não atendimento ao tipo textual'],
                ['descricao' => 'Texto insuficiente'],
                ['descricao' => 'Parte desconectada'],
            ]);
        } else {
            echo "\e[31mA tabela não está vazia. Nenhum dado foi adicionado.";
        }
    }
}
