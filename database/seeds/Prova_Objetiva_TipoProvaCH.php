<?php

use Illuminate\Database\Seeder;

class Prova_Objetiva_TipoProvaCH extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('prova_objetiva_tipo_prova_ch')->get()->count() == 0) {
            DB::table('prova_objetiva_tipo_prova_ch')->insert([
                [
                    'codigo' => 451,
                    'descricao' => 'Azul'
                ],
                [
                    'codigo' => 452,
                    'descricao' => 'Amarela'
                ],
                [
                    'codigo' => 453,
                    'descricao' => 'Branca'
                ],
                [
                    'codigo' => 454,
                    'descricao' => 'Rosa'
                ],
                [
                    'codigo' => 464,
                    'descricao' => 'Laranja - Adaptada Ledor'
                ],
                [
                    'codigo' => 468,
                    'descricao' => 'Verde - Videoprova - Libras'
                ],
                [
                    'codigo' => 491,
                    'descricao' => 'Azul (Reaplicação)'
                ],
                [
                    'codigo' => 492,
                    'descricao' => 'Amarelo (Reaplicação)'
                ],
                [
                    'codigo' => 493,
                    'descricao' => 'Branco (Reaplicação)'
                ],
                [
                    'codigo' => 494,
                    'descricao' => 'Rosa (Reaplicação)'
                ],
            ]);
        } else {
            echo "\e[31mA tabela não está vazia. Nenhum dado foi adicionado.";
        }
    }
}
