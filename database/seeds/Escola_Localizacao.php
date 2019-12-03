<?php

use Illuminate\Database\Seeder;

class Escola_Localizacao extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('escola_localizacao')->get()->count() == 0) {
            DB::table('escola_localizacao')->insert([
                ['descricao' => 'Urbana'],
                ['descricao' => 'Rural']
            ]);
        } else {
            echo "\e[31mA tabela não está vazia. Nenhum dado foi adicionado.";
        }
    }
}
