<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Chama todos os seeders
        $this->call([
            Escola_DependenciaAdministrativa::class,
            Escola_Localizacao::class,
            Escola_SituacaoFuncionamento::class,
            Participante_AnoConclusaoEM::class,
            Participante_CorRaca::class,
            Participante_EstadoCivil::class,
            Participante_Nacionalidade::class,
            Participante_SituacaoConclusaoEM::class,
            Participante_TipoEscolaEM::class,
            Participante_TipoInstituicaoEM::class,
            Prova_Objetiva_LinguaEstrangeira::class,
            Prova_Objetiva_Presenca::class,
            Prova_Objetiva_TipoProvaCN::class,
            Prova_Objetiva_TipoProvaCH::class,
            Prova_Objetiva_TipoProvaLC::class,
            Prova_Objetiva_TipoProvaMT::class,
            Prova_Redacao_Situacao::class,
            Socioeconomico_ConclusaoEnsinoMedio::class,
            Socioeconomico_EmpregadoDomestico::class,
            Socioeconomico_EscolaridadeResponsavel::class,
            Socioeconomico_OcupacaoResponsavel::class,
            Socioeconomico_QuantidadeItemCasa::class,
            Socioeconomico_RendaMensal::class,
            Socioeconomico_TemItemCasa::class,
            Socioeconomico_TipoEscolaEnsinoMedio::class,
        ]);
    }
}
