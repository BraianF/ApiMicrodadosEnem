<?php

use Illuminate\Database\Seeder;

class Prova_Objetiva_TipoProvaCN extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('prova_objetiva_tipo_prova_cn')->get()->count() == 0) {
            DB::table('prova_objetiva_tipo_prova_cn')->insert([
                [
                    'codigo' => 447,
                    'descricao' => 'Azul'
                ],
                [
                    'codigo' => 448,
                    'descricao' => 'Amarela'
                ],
                [
                    'codigo' => 449,
                    'descricao' => 'Cinza'
                ],
                [
                    'codigo' => 450,
                    'descricao' => 'Rosa'
                ],
                [
                    'codigo' => 463,
                    'descricao' => 'Laranja - Adaptada Ledor'
                ],
                [
                    'codigo' => 467,
                    'descricao' => 'Verde - Videoprova - Libras'
                ],
                [
                    'codigo' => 487,
                    'descricao' => 'Amarela (Reaplicação)'
                ],
                [
                    'codigo' => 488,
                    'descricao' => 'Cinza (Reaplicação)'
                ],
                [
                    'codigo' => 489,
                    'descricao' => 'Azul (Reaplicação)'
                ],
                [
                    'codigo' => 490,
                    'descricao' => 'Rosa (Reaplicação)'
                ],
            ]);
        } else {
            echo "\e[31mA tabela não está vazia. Nenhum dado foi adicionado.";
        }
    }
}
