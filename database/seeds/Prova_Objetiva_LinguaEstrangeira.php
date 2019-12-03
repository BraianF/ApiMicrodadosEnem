<?php

use Illuminate\Database\Seeder;

class Prova_Objetiva_LinguaEstrangeira extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('prova_objetiva_lingua_estrangeira')->get()->count() == 0) {
            DB::table('prova_objetiva_lingua_estrangeira')->insert([
                [
                    'id' => 0,
                    'descricao' => 'Inglês'
                ],
                [
                    'id' => 1,
                    'descricao' => 'Espanhol'
                ],
            ]);
        } else {
            echo "\e[31mA tabela não está vazia. Nenhum dado foi adicionado.";
        }
    }
}
