<?php

use Illuminate\Database\Seeder;

class Socioeconomico_QuantidadeItemCasa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('socioeconomico_quantidade_item_casa')->get()->count() == 0) {
            DB::table('socioeconomico_quantidade_item_casa')->insert([
                [
                    'opcao' => 'A',
                    'descricao' => 'Não.'
                ],
                [
                    'opcao' => 'B',
                    'descricao' => 'Sim, um.'
                ],
                [
                    'opcao' => 'C',
                    'descricao' => 'Sim, dois.'
                ],
                [
                    'opcao' => 'D',
                    'descricao' => 'Sim, três.'
                ],
                [
                    'opcao' => 'E',
                    'descricao' => 'Sim, quatro ou mais.'
                ],
            ]);
        } else {
            echo "\e[31mA tabela não está vazia. Nenhum dado foi adicionado.";
        }
    }
}
