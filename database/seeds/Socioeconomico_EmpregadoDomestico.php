<?php

use Illuminate\Database\Seeder;

class Socioeconomico_EmpregadoDomestico extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('socioeconomico_empregado_domestico')->get()->count() == 0) {
            DB::table('socioeconomico_empregado_domestico')->insert([
                [
                    'opcao' => 'A',
                    'descricao' => 'Não.'
                ],
                [
                    'opcao' => 'B',
                    'descricao' => 'Sim, um ou dois dias por semana.'
                ],
                [
                    'opcao' => 'C',
                    'descricao' => 'Sim, três ou quatro dias por semana.'
                ],
                [
                    'opcao' => 'D',
                    'descricao' => 'Sim, pelo menos cinco dias por semana.'
                ],
            ]);
        } else {
            echo "\e[31mA tabela não está vazia. Nenhum dado foi adicionado.";
        }
    }
}
