<?php

namespace Tests\Feature;

use App\Classes\Fachadas\FacadesTurma;
use App\Classes\pegardados\PegarDadosDeAula;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Classes\Permissoes\ValidarPermissaoAdm;
use App\Classes\Permissoes\VerPerDePRoOUADM;
use App\Classes\videoslivres\GetVideosDoProf;
use App\Rules\Adm\ValidarAdministrador;
use App\Rules\Candidato\ValidarIdadeResponsavel;
use Illuminate\Support\Facades\Validator;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }


    public function test_primeiro_formulario(){
        $fachadaTurma = new FacadesTurma();
        $dados = $fachadaTurma->cadastroPrimeiraformulario(
        [
            "nacionalidade" => "Brasileira",
            "estado_civil" => "Casado",
            "telefone" => "111111111111",
            'user_id' => 1
        ]
        );
        $this->assertEquals(true, isset($dados->nacionalidade));
        $this->assertEquals(true, isset($dados->estado_civil));
        $this->assertEquals(true, isset($dados->telefone));
        $this->assertEquals(1, $dados->user_id);
    }

    public function testValidacaoDeAdministrador(){
        $validator = Validator::make(['user_id' => 1], [
            'user_id' => [new ValidarAdministrador(1)],
        ]);

        $this->assertEquals(0, $validator->fails());


        $validator = Validator::make(['user_id' => 1], [
            'user_id' => [new ValidarAdministrador(3)],
        ]);

        $this->assertEquals(1, $validator->fails());


    }


    public function test_segundo_formulario(){
        $fachadaTurma = new FacadesTurma();
        $dados = $fachadaTurma->FazendoAInscricaoDoSegundoFormulario(
        [
            "nome_responsavel" => "Antonio Silva",
            "nascimento_responsavel" => "1964-12-08",
            "telefone_responsavel" => "1106700104",
            "grau_de_parentesco" => "Pai",
            'user_id' => 2
        ]
        );
        $this->assertEquals("Antonio Silva", $dados->nome_responsavel);
        $this->assertEquals("1964-12-08", $dados->nascimento_responsavel);
        $this->assertEquals("1106700104", $dados->telefone_responsavel);
        $this->assertEquals("Pai", $dados->grau_de_parentesco);
        $this->assertEquals(2, $dados->user_id);
    }

        public function   test_idade_do_reponsavel(){
            $validator = Validator::make(['nascimento_responsavel' => "1964-12-08"], [
                "nascimento_responsavel" => [new ValidarIdadeResponsavel],
            ]);

            $this->assertEquals(0, $validator->fails());

            $validator = Validator::make(['nascimento_responsavel' => "2007-12-08"], [
                "nascimento_responsavel" => [new ValidarIdadeResponsavel],
            ]);

            $this->assertEquals(1, $validator->fails());


            $validator = Validator::make(['nascimento_responsavel' => "1700-12-08"], [
                "nascimento_responsavel" => [new ValidarIdadeResponsavel],
            ]);

            $this->assertEquals(1, $validator->fails());
        }


        public function test_terceiro_formulario(){
            $fachadaTurma = new FacadesTurma();
            $dados = $fachadaTurma->inscricaoTerceiroForm(
            [
                "status_trabalho" => "trabalhando",
                "cargo" => "Programador",
                "ultimocargo" => "teste",
                "moracomquem" => "pais",
                "renda" => "De 1 a 2 salários mínimos (de R$ 998,00 até R$ 1.996,00)",
                "quantidade" => "5",
                'user_id' => 2
            ]
            );
            $this->assertEquals("trabalhando", $dados->status_trabalho);
            $this->assertEquals("Programador", $dados->cargo);
            $this->assertEquals("teste", $dados->ultimo_cargo);
            $this->assertEquals("pais", $dados->com_quem_mora);
            $this->assertEquals("De 1 a 2 salários mínimos (de R$ 998,00 até R$ 1.996,00)", $dados->renda);
            $this->assertEquals("5", $dados->quatidade_moradores_na_casa);
            $this->assertEquals(2, $dados->user_id);
        }



        public function test_quinto_formulario(){
            $fachadaTurma = new FacadesTurma();
            $dados = $fachadaTurma->inscricaoQuintoFormulario(
            [
                "escolaridade" => "Ensino Médio (Cursando)",
                "periodo" => "Vespertino",
                "user_id" => 2
            ]
            );
            $this->assertEquals("Ensino Médio (Cursando)", $dados->grau);
            $this->assertEquals("Vespertino", $dados->periodo);
            $this->assertEquals(2, $dados->user_id);
        }



}
