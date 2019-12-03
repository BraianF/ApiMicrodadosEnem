<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMicrodadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('microdados', function (Blueprint $table) {
			$table->bigIncrements('id');

			##################			DADOS DO PARTICIPANTE			##########################
			$table->bigInteger('NU_INSCRICAO')->nullable(true);
			$table->year('NU_ANO')->nullable(true);
			$table->bigInteger('CO_MUNICIPIO_RESIDENCIA')->nullable(true);
			$table->string('NO_MUNICIPIO_RESIDENCIA', 150)->nullable(true);
			$table->tinyInteger('CO_UF_RESIDENCIA')->nullable(true);
			$table->tinyInteger('SG_UF_RESIDENCIA')->nullable(true);
			$table->tinyInteger('NU_IDADE')->nullable(true);
			$table->char('TP_SEXO', 1)->nullable(true);
			$table->tinyInteger('TP_ESTADO_CIVIL')->nullable(true);
			$table->tinyInteger('TP_COR_RACA')->nullable(true);
			$table->tinyInteger('TP_NACIONALIDADE')->nullable(true);
			$table->integer('CO_MUNICIPIO_NASCIMENTO')->nullable(true);
			$table->string('NO_MUNICIPIO_NASCIMENTO', 150)->nullable(true);
			$table->tinyInteger('CO_UF_NASCIMENTO')->nullable(true);
			$table->string('SG_UF_NASCIMENTO', 2)->nullable(true);
			$table->tinyInteger('TP_ST_CONCLUSAO')->nullable(true);
			$table->tinyInteger('TP_ANO_CONCLUIU')->nullable(true);
			$table->tinyInteger('TP_ESCOLA')->nullable(true);
			$table->tinyInteger('TP_ENSINO')->nullable(true);
			$table->boolean('IN_TREINEIRO')->nullable(true);

			################			DADOS DA ESCOLA			#######################
			$table->integer('CO_ESCOLA')->nullable(true);
			$table->integer('CO_MUNICIPIO_ESC')->nullable(true);
			$table->string('NO_MUNICIPIO_ESC')->nullable(true);
			$table->tinyInteger('CO_UF_ESC')->nullable(true);
			$table->string('SG_UF_ESC', 2)->nullable(true);
			$table->tinyInteger('TP_DEPENDENCIA_ADM_ESC')->nullable(true);
			$table->tinyInteger('TP_LOCALIZACAO_ESC')->nullable(true);
			$table->tinyInteger('TP_SIT_FUNC_ESC')->nullable(true);

			###############			DADOS DOS PEDIDOS DE ATENDIMENTO ESPECIALIZADO			###################
			$table->boolean('IN_BAIXA_VISAO')->nullable(true);
			$table->boolean('IN_CEGUEIRA')->nullable(true);
			$table->boolean('IN_SURDEZ')->nullable(true);
			$table->boolean('IN_DEFICIENCIA_AUDITIVA')->nullable(true);
			$table->boolean('IN_SURDO_CEGUEIRA')->nullable(true);
			$table->boolean('IN_DEFICIENCIA_FISICA')->nullable(true);
			$table->boolean('IN_DEFICIENCIA_MENTAL')->nullable(true);
			$table->boolean('IN_DEFICIT_ATENCAO')->nullable(true);
			$table->boolean('IN_DISLEXIA')->nullable(true);
			$table->boolean('IN_DISCALCULIA')->nullable(true);
			$table->boolean('IN_AUTISMO')->nullable(true);
			$table->boolean('IN_VISAO_MONOCULAR')->nullable(true);
			$table->boolean('IN_OUTRA_DEF')->nullable(true);

			################			DADOS DOS PEDIDOS DE ATENDIMENTO ESPECÍFICO			####################
			$table->boolean('IN_GESTANTE')->nullable(true);
			$table->boolean('IN_LACTANTE')->nullable(true);
			$table->boolean('IN_IDOSO')->nullable(true);
			$table->boolean('IN_ESTUDA_CLASSE_HOSPITALAR')->nullable(true);

			######	DADOS DOS PEDIDOS DE RECURSOS ESPECIALIZADOS E ESPECÍFICOS PARA REALIZAÇÃO DAS PROVAS	######
			$table->boolean('IN_SEM_RECURSO')->nullable(true);
			$table->boolean('IN_BRAILLE')->nullable(true);
			$table->boolean('IN_AMPLIADA_24')->nullable(true);
			$table->boolean('IN_AMPLIADA_18')->nullable(true);
			$table->boolean('IN_LEDOR')->nullable(true);
			$table->boolean('IN_ACESSO')->nullable(true);
			$table->boolean('IN_TRANSCRICAO')->nullable(true);
			$table->boolean('IN_LIBRAS')->nullable(true);
			$table->boolean('IN_LEITURA_LABIAL')->nullable(true);
			$table->boolean('IN_MESA_CADEIRA_RODAS')->nullable(true);
			$table->boolean('IN_MESA_CADEIRA_SEPARADA')->nullable(true);
			$table->boolean('IN_APOIO_PERNA')->nullable(true);
			$table->boolean('IN_GUIA_INTERPRETE')->nullable(true);
			$table->boolean('IN_COMPUTADOR')->nullable(true);
			$table->boolean('IN_CADEIRA_ESPECIAL')->nullable(true);
			$table->boolean('IN_CADEIRA_CANHOTO')->nullable(true);
			$table->boolean('IN_CADEIRA_ACOLCHOADA')->nullable(true);
			$table->boolean('IN_PROVA_DEITADO')->nullable(true);
			$table->boolean('IN_MOBILIARIO_OBESO')->nullable(true);
			$table->boolean('IN_LAMINA_OVERLAY')->nullable(true);
			$table->boolean('IN_PROTETOR_AURICULAR')->nullable(true);
			$table->boolean('IN_MEDIDOR_GLICOSE')->nullable(true);
			$table->boolean('IN_MAQUINA_BRAILE')->nullable(true);
			$table->boolean('IN_SOROBAN')->nullable(true);
			$table->boolean('IN_MARCA_PASSO')->nullable(true);
			$table->boolean('IN_SONDA')->nullable(true);
			$table->boolean('IN_MEDICAMENTOS')->nullable(true);
			$table->boolean('IN_SALA_INDIVIDUAL')->nullable(true);
			$table->boolean('IN_SALA_ESPECIAL')->nullable(true);
			$table->boolean('IN_SALA_ACOMPANHANTE')->nullable(true);
			$table->boolean('IN_MOBILIARIO_ESPECIFICO')->nullable(true);
			$table->boolean('IN_MATERIAL_ESPECIFICO')->nullable(true);
			$table->boolean('IN_NOME_SOCIAL')->nullable(true);

			###############			DADOS DO LOCAL DE APLICAÇÃO DA PROVA			#################
			$table->integer('CO_MUNICIPIO_PROVA')->nullable(true);
			$table->string('NO_MUNICIPIO_PROVA', 150)->nullable(true);
			$table->string('CO_UF_PROVA', 2)->nullable(true);
			$table->string('SG_UF_PROVA', 2)->nullable(true);

			###############			DADOS DA PROVA OBJETIVA			######################
			$table->tinyInteger('TP_PRESENCA_CN')->nullable(true);
			$table->tinyInteger('TP_PRESENCA_CH')->nullable(true);
			$table->tinyInteger('TP_PRESENCA_LC')->nullable(true);
			$table->tinyInteger('TP_PRESENCA_MT')->nullable(true);
			$table->smallInteger('CO_PROVA_CN')->nullable(true);
			$table->smallInteger('CO_PROVA_CH')->nullable(true);
			$table->smallInteger('CO_PROVA_LC')->nullable(true);
			$table->smallInteger('CO_PROVA_MT')->nullable(true);
			$table->double('NU_NOTA_CN', 9, 2)->nullable(true);
			$table->double('NU_NOTA_CH', 9, 2)->nullable(true);
			$table->double('NU_NOTA_LC', 9, 2)->nullable(true);
			$table->double('NU_NOTA_MT', 9, 2)->nullable(true);
			$table->string('TX_RESPOSTAS_CN', 45)->nullable(true);
			$table->string('TX_RESPOSTAS_CH', 45)->nullable(true);
			$table->string('TX_RESPOSTAS_LC', 50)->nullable(true);
			$table->string('TX_RESPOSTAS_MT', 45)->nullable(true);
			$table->tinyInteger('TP_LINGUA')->nullable(true);
			$table->string('TX_GABARITO_CN', 45)->nullable(true);
			$table->string('TX_GABARITO_CH', 45)->nullable(true);
			$table->string('TX_GABARITO_LC', 50)->nullable(true);
			$table->string('TX_GABARITO_MT', 45)->nullable(true);

			###############			DADOS DA REDAÇÃO			####################
			$table->tinyInteger('TP_STATUS_REDACAO')->nullable(true);
			$table->integer('NU_NOTA_COMP1')->nullable(true);
			$table->integer('NU_NOTA_COMP2')->nullable(true);
			$table->integer('NU_NOTA_COMP3')->nullable(true);
			$table->integer('NU_NOTA_COMP4')->nullable(true);
			$table->integer('NU_NOTA_COMP5')->nullable(true);
			$table->integer('NU_NOTA_REDACAO')->nullable(true);

			##########			DADOS DO QUESTIONÁRIO SOCIOECONÔMICO			##########
			$table->string('Q001', 2)->nullable(true);
			$table->string('Q002', 2)->nullable(true);
			$table->string('Q003', 2)->nullable(true);
			$table->string('Q004', 2)->nullable(true);
			$table->string('Q005', 2)->nullable(true);
			$table->string('Q006', 2)->nullable(true);
			$table->string('Q007', 2)->nullable(true);
			$table->string('Q008', 2)->nullable(true);
			$table->string('Q009', 2)->nullable(true);
			$table->string('Q010', 2)->nullable(true);
			$table->string('Q011', 2)->nullable(true);
			$table->string('Q012', 2)->nullable(true);
			$table->string('Q013', 2)->nullable(true);
			$table->string('Q014', 2)->nullable(true);
			$table->string('Q015', 2)->nullable(true);
			$table->string('Q016', 2)->nullable(true);
			$table->string('Q017', 2)->nullable(true);
			$table->string('Q018', 2)->nullable(true);
			$table->string('Q019', 2)->nullable(true);
			$table->string('Q020', 2)->nullable(true);
			$table->string('Q021', 2)->nullable(true);
			$table->string('Q022', 2)->nullable(true);
			$table->string('Q023', 2)->nullable(true);
			$table->string('Q024', 2)->nullable(true);
			$table->string('Q025', 2)->nullable(true);
			$table->string('Q026', 2)->nullable(true);
			$table->string('Q027', 2)->nullable(true);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists('microdados');
    }
}
