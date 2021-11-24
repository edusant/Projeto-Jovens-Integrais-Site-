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

}
