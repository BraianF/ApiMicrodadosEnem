<?php

use Illuminate\Database\Seeder;

class Prova_Objetiva_Presenca extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('prova_objetiva_presenca')->get()->count() == 0) {
            DB::table('prova_objetiva_presenca')->insert([
                [
                    'id' => 0,
                    'descricao' => 'Faltou à prova'
                ],
                [
                    'id' => 1,
                    'descricao' => 'Presente na prova'
                ],
                [
                    'id' => 2,
                    'descricao' => 'Eliminado na prova'
                ],
            ]);
        } else {
            echo "\e[31mA tabela não está vazia. Nenhum dado foi adicionado.";
        }
    }
}
