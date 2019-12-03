<?php

use Illuminate\Database\Seeder;

class Socioeconomico_RendaMensal extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('socioeconomico_renda_mensal')->get()->count() == 0) {
            DB::table('socioeconomico_renda_mensal')->insert([
                [
                    'opcao' => 'A',
                    'descricao' => 'Nenhuma renda.'
                ],
                [
                    'opcao' => 'B',
                    'descricao' => 'Até R$ 954,00.'
                ],
                [
                    'opcao' => 'C',
                    'descricao' => 'De R$ 954,01 até R$ 1.431,00.'
                ],
                [
                    'opcao' => 'D',
                    'descricao' => 'De R$ 1.431,01 até R$ 1.908,00.'
                ],
                [
                    'opcao' => 'E',
                    'descricao' => 'De R$ 1.908,01 até R$ 2.385,00.'
                ],
                [
                    'opcao' => 'F',
                    'descricao' => 'De R$ 2.385,01 até R$ 2.862,00.'
                ],
                [
                    'opcao' => 'G',
                    'descricao' => 'De R$ 2.862,01 até R$ 3.816,00.'
                ],
                [
                    'opcao' => 'H',
                    'descricao' => 'De R$ 3.816,01 até R$ 4.770,00.'
                ],
                [
                    'opcao' => 'I',
                    'descricao' => 'De R$ 4.770,01 até R$ 5.724,00.'
                ],
                [
                    'opcao' => 'J',
                    'descricao' => 'De R$ 5.724,01 até R$ 6.678,00.'
                ],
                [
                    'opcao' => 'K',
                    'descricao' => 'De R$ 6.678,01 até R$ 7.632,00.'
                ],
                [
                    'opcao' => 'L',
                    'descricao' => 'De R$ 7.632,01 até R$ 8.586,00.'
                ],
                [
                    'opcao' => 'M',
                    'descricao' => 'De R$ 8.586,01 até R$ 9.540,00.'
                ],
                [
                    'opcao' => 'N',
                    'descricao' => 'De R$ 9.540,01 até R$ 11.448,00.'
                ],
                [
                    'opcao' => 'O',
                    'descricao' => 'De R$ 11.448,01 até R$ 14.310,00.'
                ],
                [
                    'opcao' => 'P',
                    'descricao' => 'De R$ 14.310,01 até R$ 19.080,00.'
                ],
                [
                    'opcao' => 'Q',
                    'descricao' => 'Mais de R$ 19.080,00.'
                ],
            ]);
        } else {
            echo "\e[31mA tabela não está vazia. Nenhum dado foi adicionado.";
        }
    }
}
