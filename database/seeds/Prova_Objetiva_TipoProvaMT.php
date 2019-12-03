<?php

use Illuminate\Database\Seeder;

class Prova_Objetiva_TipoProvaMT extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('prova_objetiva_tipo_prova_mt')->get()->count() == 0) {
            DB::table('prova_objetiva_tipo_prova_mt')->insert([
                [
                    'codigo' => 459,
                    'descricao' => 'Azul'
                ],
                [
                    'codigo' => 460,
                    'descricao' => 'Amarela'
                ],
                [
                    'codigo' => 461,
                    'descricao' => 'Rosa'
                ],
                [
                    'codigo' => 462,
                    'descricao' => 'Cinza'
                ],
                [
                    'codigo' => 466,
                    'descricao' => 'Laranja - Adaptada Ledor'
                ],
                [
                    'codigo' => 470,
                    'descricao' => 'Verde - Videoprova - Libras'
                ],
                [
                    'codigo' => 499,
                    'descricao' => 'Amarela (Reaplicação)'
                ],
                [
                    'codigo' => 500,
                    'descricao' => 'Cinza (Reaplicação)'
                ],
                [
                    'codigo' => 501,
                    'descricao' => 'Azul (Reaplicação)'
                ],
                [
                    'codigo' => 502,
                    'descricao' => 'Rosa (Reaplicação)'
                ],
            ]);
        } else {
            echo "\e[31mA tabela não está vazia. Nenhum dado foi adicionado.";
        }
    }
}
