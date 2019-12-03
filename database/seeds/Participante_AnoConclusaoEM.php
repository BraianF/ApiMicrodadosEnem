<?php

use Illuminate\Database\Seeder;

class Participante_AnoConclusaoEM extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('participante_ano_conclusao_em')->get()->count() == 0) {
            DB::table('participante_ano_conclusao_em')->insert([
                [
                    'id' => 0,
                    'descricao' => 'Não informado'
                ],
                [
                    'id' => 1,
                    'descricao' => '2017'
                ],
                [
                    'id' => 2,
                    'descricao' => '2016'
                ],
                [
                    'id' => 3,
                    'descricao' => '2016'
                ],
                [
                    'id' => 4,
                    'descricao' => '2015'
                ],
                [
                    'id' => 5,
                    'descricao' => '2014'
                ],
                [
                    'id' => 6,
                    'descricao' => '2013'
                ],
                [
                    'id' => 7,
                    'descricao' => '2012'
                ],
                [
                    'id' => 8,
                    'descricao' => '2011'
                ],
                [
                    'id' => 9,
                    'descricao' => '2010'
                ],
                [
                    'id' => 10,
                    'descricao' => '2009'
                ],
                [
                    'id' => 11,
                    'descricao' => '2008'
                ],
                [
                    'id' => 12,
                    'descricao' => 'Antes de 2007'
                ]
            ]);
        } else {
            echo "\e[31mA tabela não está vazia. Nenhum dado foi adicionado.";
        }
    }
}
