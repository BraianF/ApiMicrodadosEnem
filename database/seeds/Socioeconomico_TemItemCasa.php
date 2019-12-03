<?php

use Illuminate\Database\Seeder;

class Socioeconomico_TemItemCasa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('socioeconomico_tem_item_casa')->get()->count() == 0) {
            DB::table('socioeconomico_tem_item_casa')->insert([
                [
                    'opcao' => 'A',
                    'descricao' => 'Não.'
                ],
                [
                    'opcao' => 'B',
                    'descricao' => 'Sim.'
                ],
            ]);
        } else {
            echo "\e[31mA tabela não está vazia. Nenhum dado foi adicionado.";
        }
    }
}
