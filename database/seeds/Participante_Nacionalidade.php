<?php

use Illuminate\Database\Seeder;

class Participante_Nacionalidade extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('participante_nacionalidade')->get()->count() == 0) {
            DB::table('participante_nacionalidade')->insert([
                [
                    'id' => 0,
                    'descricao' => 'Não informado'
                ],
                [
                    'id' => 1,
                    'descricao' => 'Brasileiro(a)'
                ],
                [
                    'id' => 2,
                    'descricao' => 'Brasileiro(a) Naturalizado(a)'
                ],
                [
                    'id' => 3,
                    'descricao' => 'Estrangeiro(a)'
                ],
                [
                    'id' => 4,
                    'descricao' => 'Brasileiro(a) Nato(a), nascido(a) no exterior'
                ],
            ]);
        } else {
            echo "\e[31mA tabela não está vazia. Nenhum dado foi adicionado.";
        }
    }
}
