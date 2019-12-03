<?php

use Illuminate\Database\Seeder;

class Socioeconomico_EscolaridadeResponsavel extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('socioeconomico_escolaridade_responsavel')->get()->count() == 0) {
            DB::table('socioeconomico_escolaridade_responsavel')->insert([
                [
                    'opcao' => 'A',
                    'descricao' => 'Nunca estudou.'
                ],
                [
                    'opcao' => 'B',
                    'descricao' => 'Não completou a 4ª série/5º ano do Ensino Fundamental.'
                ],
                [
                    'opcao' => 'C',
                    'descricao' => 'Completou a 4ª série/5º ano, mas não completou a 8ª série/9º ano do Ensino Fundamental.'
                ],
                [
                    'opcao' => 'D',
                    'descricao' => 'Completou a 8ª série/9º ano do Ensino Fundamental, mas não completou o Ensino Médio.'
                ],
                [
                    'opcao' => 'E',
                    'descricao' => 'Completou o Ensino Médio, mas não completou a Faculdade.'
                ],
                [
                    'opcao' => 'F',
                    'descricao' => 'Completou a Faculdade, mas não completou a Pós-graduação.'
                ],
                [
                    'opcao' => 'G',
                    'descricao' => 'Completou a Pós-graduação.'
                ],
                [
                    'opcao' => 'H',
                    'descricao' => 'Não sei.'
                ],
            ]);
        } else {
            echo "\e[31mA tabela não está vazia. Nenhum dado foi adicionado.";
        }
    }
}
