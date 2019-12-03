<?php

use Illuminate\Database\Seeder;

class Participante_TipoEscolaEM extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('participante_tipo_escola_em')->get()->count() == 0) {
            DB::table('participante_tipo_escola_em')->insert([
                ['descricao' => 'Não Respondeu'],
                ['descricao' => 'Pública'],
                ['descricao' => 'Privada'],
                ['descricao' => 'Exterior'],
            ]);
        } else {
            echo "\e[31mA tabela não está vazia. Nenhum dado foi adicionado.";
        }
    }
}
