<?php

use Illuminate\Database\Seeder;

class Participante_EstadoCivil extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('participante_estado_civil')->get()->count() == 0) {
            DB::table('participante_estado_civil')->insert([
                [
                    'id' => 0,
                    'descricao' => 'Solteiro(a)'
                ],
                [
                    'id' => 1,
                    'descricao' => 'Casado(a)/Mora com companheiro(a)'
                ],
                [
                    'id' => 2,
                    'descricao' => 'Divorciado(a)/Desquitado(a)/Separado(a)'
                ],
                [
                    'id' => 3,
                    'descricao' => 'Viúvo(a)'
                ],
            ]);
        } else {
            echo "\e[31mA tabela não está vazia. Nenhum dado foi adicionado.";
        }
    }
}
