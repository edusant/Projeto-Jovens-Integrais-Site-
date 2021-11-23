<?php

namespace Tests\Feature;

use App\Classes\Fachadas\FacadesTurma;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class Candidato extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example_200()
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
            // $this->assertEquals(true, 1);



    }
}
