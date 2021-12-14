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


        public function test_sexto_formulario(){
            $fachadaTurma = new FacadesTurma();
            $text01 = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sagittis vestibulum diam at euismod. Nunc id sapien lobortis, pharetra felis vitae, pellentesque risus. Donec ac hendrerit nibh. Aenean enim orci, viverra vitae dictum eu, maximus vitae lacus. Phasellus aliquet ipsum hendrerit, condimentum felis nec, molestie quam. Pellentesque ultrices porta orci, vitae luctus eros suscipit ac. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed porttitor pulvinar orci elementum aliquam. Nunc maximus auctor varius. Fusce tristique neque elementum, congue arcu eu, varius velit. Fusce nec efficitur ex. In quis nisi maximus, suscipit erat ac, vulputate leo. Nullam sed dolor ac diam laoreet vulputate eget ac eros.

            Nulla vel erat sit amet risus rutrum tincidunt vitae ac risus. Aliquam convallis quis augue sed bibendum. Cras id scelerisque felis, et dictum tortor. Etiam vitae lectus sodales, accumsan enim id, accumsan lectus. Sed porttitor orci erat, at tempus elit eleifend ac. Nullam interdum vulputate leo. Curabitur et orci maximus, imperdiet ex sed, interdum metus. Proin nulla dolor, aliquam vel mattis sit amet, viverra nec mi. Curabitur faucibus dignissim eros, eu laoreet turpis gravida quis. Praesent augue purus, imperdiet eu fringilla vitae, rutrum quis turpis. Nunc ac tincidunt neque. Proin convallis nibh quis metus tincidunt, in faucibus dui sollicitudin. Maecenas at ligula id ipsum sagittis dignissim at fringilla turpis. Pellentesque auctor turpis mauris, et laoreet lectus luctus non. Ut rhoncus a est nec ultricies.

            Morbi porta quis leo quis blandit. Sed ligula nulla, molestie eget mattis a, tempus in diam. Curabitur a varius urna. Maecenas in mauris justo. Quisque posuere et nisi vitae scelerisque. Morbi varius non dui non fermentum. Phasellus lectus magna, malesuada id odio eu, ultricies viverra sem. Pellentesque tortor ipsum, tincidunt sed neque in, ultricies placerat ipsum. Phasellus at condimentum nisi. Quisque mollis egestas nisi.

            Maecenas scelerisque tellus nulla, sed tempor urna posuere et. Aenean ut mollis augue. Phasellus non sapien eleifend, porta eros non, faucibus massa. Quisque sollicitudin nibh vel felis pharetra, et consectetur purus viverra. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sit amet odio id augue iaculis eleifend. Curabitur euismod mollis sodales.

            Duis vulputate odio et lectus mattis fermentum. Praesent vel sem non neque consequat mattis. Mauris quis vestibulum velit. Pellentesque id maximus erat, non feugiat lectus. Donec tempus tincidunt lacus luctus aliquet. Quisque quis semper massa. Vestibulum eu nisi eget enim sodales pretium id dignissim felis. Fusce ultricies sodales velit, in finibus nulla blandit consequat. Cras tincidunt sodales dolor vitae cursus. Vivamus sed euismod magna. Maecenas eget ipsum ut libero tempor accumsan. Nunc maximus convallis felis vitae feugiat.

            Vivamus congue at enim nec luctus. Praesent vitae convallis dui. Morbi venenatis luctus neque, quis lacinia risus cursus quis. Quisque molestie facilisis tortor. Curabitur elementum lectus a arcu tempus, vitae dictum magna porta. Ut interdum hendrerit pharetra. Proin accumsan, justo nec elementum suscipit, orci magna molestie sapien, sed ultrices ante erat quis ipsum. Integer quis orci placerat, varius est vel, fermentum ligula. Sed maximus quam sem, in pretium ex interdum id. Etiam elementum odio a mi tempor suscipit. Sed vel urna venenatis nunc rhoncus semper vitae ut mi. Suspendisse varius tempor est et consequat.

            Sed pulvinar imperdiet orci, in suscipit elit bibendum in. Cras sit amet augue vel nibh elementum sodales id blandit ante. Vivamus non ipsum ornare, euismod odio in, blandit mauris. Etiam dignissim eu nulla et ornare. Ut finibus ex diam, non condimentum augue scelerisque aliquam. Curabitur sodales finibus mi ut congue. Morbi nulla metus, condimentum ut velit nec, scelerisque tincidunt ligula. Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
            $text02 = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed nibh a elit laoreet laoreet. Phasellus nulla augue, tempor sed tellus ac, viverra aliquet ante. Proin id leo ut velit consectetur finibus et scelerisque sapien. Vivamus cursus risus in aliquet tincidunt. Donec elementum felis ut quam pharetra, vitae suscipit magna feugiat. Fusce iaculis justo eget turpis sollicitudin, a venenatis nulla hendrerit. Vestibulum consectetur eleifend fringilla.

            Proin sed eros eget urna ullamcorper semper in eget purus. Donec sapien dolor, imperdiet id ante nec, congue viverra nisi. Aenean magna lacus, tristique sed egestas quis, elementum non lacus. Maecenas ornare, libero at ultricies iaculis, diam sapien rutrum est, a commodo ligula purus sollicitudin felis. Donec sagittis tempus porta. In hac habitasse platea dictumst. Cras dictum diam vel eros venenatis, id lobortis libero scelerisque. Nam ac lorem lectus. Sed quis nisi erat. Duis ut dolor vel leo porta lacinia et at orci. Fusce elementum nulla magna, sed efficitur dui mattis ut. Suspendisse vehicula pretium nunc, nec vehicula lacus vulputate id. Duis consequat nibh ullamcorper ullamcorper iaculis. In quis molestie diam, non malesuada eros. Nullam ultricies tellus sed maximus efficitur.

            Duis vestibulum mi libero. Integer id arcu ante. Vivamus pretium lacus ipsum, ac tincidunt lectus vehicula in. Nullam in ex ultricies, egestas neque sed, rutrum neque. Vivamus vitae rutrum justo. Curabitur consequat porta risus, non dapibus ex lacinia et. Proin condimentum dictum quam. Praesent vel lobortis purus. Ut at dapibus est, congue tristique ligula. Quisque maximus tincidunt nisl, vel scelerisque justo feugiat ac. Quisque in hendrerit metus, sit amet scelerisque ipsum. Curabitur sed consectetur velit, in eleifend metus.

            Sed sodales id dolor vel venenatis. Donec cursus, nisi vel aliquam varius, justo mi eleifend leo, vitae vestibulum leo enim et risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec tincidunt vehicula tincidunt. Praesent id dolor ullamcorper, consectetur nisi ut, posuere erat. Vivamus id sagittis orci. Proin eu fermentum lacus. Curabitur sed arcu in nisi posuere blandit.

            Sed ornare justo at risus eleifend, at euismod quam volutpat. Donec nec neque erat. Curabitur vel nisi sapien. Nam suscipit auctor sagittis. Maecenas viverra nisl est, nec convallis massa vulputate eu. Aenean hendrerit ullamcorper porta. Sed ut quam in ligula feugiat auctor eget id lacus. Aliquam egestas semper mattis. Aenean a vestibulum augue. Fusce fermentum gravida magna in dignissim. Curabitur luctus lorem elit, vel fermentum diam faucibus non. In ex turpis, dapibus convallis volutpat efficitur, blandit sed est. Suspendisse cursus felis eu lectus finibus feugiat.';
            $dados = $fachadaTurma->cadastroDoSextoFomulario(
            [

                "historiadesuperacao" => $text01,
                "historiaquetedeixoufeliz" => $text02,
                "user_id" => 2
            ]
            );
            $this->assertEquals($text01, $dados->historia_superacao);
            $this->assertEquals($text02, $dados->historia_motivacao);
            $this->assertEquals(2, $dados->user_id);
        }



}
