<?php

namespace Tests\Feature;

use App\Classes\Fachadas\FacadesTurma;
use App\Classes\pegardados\PegarDadosDeAula;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Classes\Permissoes\ValidarPermissaoAdm;
use App\Classes\Permissoes\VerPerDePRoOUADM;
use App\Classes\videoslivres\GetVideosDoProf;

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
            // dd($dados);

            $this->assertEquals(true, isset($dados->nacionalidade));
            $this->assertEquals(true, isset($dados->estado_civil));
            $this->assertEquals(true, isset($dados->telefone));
            $this->assertEquals(1, $dados->user_id);
            // $this->assertEquals(true, 1);



    }

}
