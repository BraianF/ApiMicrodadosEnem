<?php

use Illuminate\Database\Seeder;

class Socioeconomico_TipoEscolaEnsinoMedio extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('socioeconomico_tipo_escola_ensino_medio')->get()->count() == 0) {
            DB::table('socioeconomico_tipo_escola_ensino_medio')->insert([
                [
                    'opcao' => 'A',
                    'descricao' => 'Somente em escola pública.'
                ],
                [
                    'opcao' => 'B',
                    'descricao' => 'Parte em escola pública e parte em escola privada SEM bolsa de estudo integral.'
                ],
                [
                    'opcao' => 'C',
                    'descricao' => 'Parte em escola pública e parte em escola privada COM bolsa de estudo integral.'
                ],
                [
                    'opcao' => 'D',
                    'descricao' => 'Somente em escola privada SEM bolsa de estudo integral.'
                ],
                [
                    'opcao' => 'E',
                    'descricao' => 'Somente em escola privada COM bolsa de estudo integral.'
                ],
                [
                    'opcao' => 'F',
                    'descricao' => 'Não frequentei a escola'
                ],
            ]);
        } else {
            echo "\e[31mA tabela não está vazia. Nenhum dado foi adicionado.";
        }
    }
}
