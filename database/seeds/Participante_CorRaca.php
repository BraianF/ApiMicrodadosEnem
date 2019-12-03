<?php

use Illuminate\Database\Seeder;

class Participante_CorRaca extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('participante_cor_raca')->get()->count() == 0) {
            DB::table('participante_cor_raca')->insert([
                [
                    'id' => 0,
                    'descricao' => 'Não declarado'
                ],
                [
                    'id' => 1,
                    'descricao' => 'Branca'
                ],
                [
                    'id' => 2,
                    'descricao' => 'Preta'
                ],
                [
                    'id' => 3,
                    'descricao' => 'Parda'
                ],
                [
                    'id' => 4,
                    'descricao' => 'Amarela'
                ],
                [
                    'id' => 5,
                    'descricao' => 'Indígena'
                ],
            ]);
        } else {
            echo "\e[31mA tabela não está vazia. Nenhum dado foi adicionado.";
        }
    }
}
