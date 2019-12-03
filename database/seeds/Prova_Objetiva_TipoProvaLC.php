<?php

use Illuminate\Database\Seeder;

class Prova_Objetiva_TipoProvaLC extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('prova_objetiva_tipo_prova_lc')->get()->count() == 0) {
            DB::table('prova_objetiva_tipo_prova_lc')->insert([
                [
                    'codigo' => 455,
                    'descricao' => 'Azul'
                ],
                [
                    'codigo' => 456,
                    'descricao' => 'Amarela'
                ],
                [
                    'codigo' => 457,
                    'descricao' => 'Rosa'
                ],
                [
                    'codigo' => 458,
                    'descricao' => 'Branca'
                ],
                [
                    'codigo' => 465,
                    'descricao' => 'Laranja - Adaptada Ledor'
                ],
                [
                    'codigo' => 469,
                    'descricao' => 'Verde - Videoprova - Libras'
                ],
                [
                    'codigo' => 495,
                    'descricao' => 'Azul (Reaplicação)'
                ],
                [
                    'codigo' => 496,
                    'descricao' => 'Amarelo (Reaplicação)'
                ],
                [
                    'codigo' => 497,
                    'descricao' => 'Branca (Reaplicação)'
                ],
                [
                    'codigo' => 498,
                    'descricao' => 'Rosa (Reaplicação)'
                ],
            ]);
        } else {
            echo "\e[31mA tabela não está vazia. Nenhum dado foi adicionado.";
        }
    }
}
