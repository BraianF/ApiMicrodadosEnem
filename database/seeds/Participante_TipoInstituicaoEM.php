<?php

use Illuminate\Database\Seeder;

class Participante_TipoInstituicaoEM extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('participante_tipo_instituicao_em')->get()->count() == 0) {
            DB::table('participante_tipo_instituicao_em')->insert([
                ['descricao' => 'Ensino Regular'],
                ['descricao' => 'Educação Especial - Modalidade Substitutiva'],
                ['descricao' => 'Educação de Jovens e Adultos'],
            ]);
        } else {
            echo "\e[31mA tabela não está vazia. Nenhum dado foi adicionado.";
        }
    }
}
