<?php

namespace App\Http\Controllers;

use App\Classes\Fachadas\FacadesTurma;
use App\Rules\Turma\RuleVerificarSeHaTurmaAtiva;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TurmasController extends Controller
{
    //TurmasController@AbrirTurma

    function AbrirTurma(Request $request){
        // dd($request->all());
        $request->validate([
            'nome_turma' => ['bail','required','max:255', new RuleVerificarSeHaTurmaAtiva()],
            //'data_inicio_periodo' => 'bail|required|date|after:today',
            //'data_fim_periodo' => 'bail|required|date|after:'.$request->all()['data_inicio_periodo'],
            'quantidade_alunos'=> 'bail|numeric|required|integer',
            //'data_final_inscricoes' => 'bail|required|date|after:'.$request->all()['data_inicio_periodo'],
            'horarios' => 'bail|required|min:3',
            'descricao' => 'bail|required|min:3',
        ]);
        // dd($request->all());
        $facadesTurma = new FacadesTurma();
        if($facadesTurma->AbrirTurma($request->all())){
            echo'Turma aberta com sucesso';
        }
    }


    public function EdicaoDeTurma(Request $request){
        $request->validate([
            'turma_id' => 'exists:turmas,id',
            'nome_turma' => ['required','max:255'],
            //'data_inicio_periodo' => 'required|date|after:today',
            //'data_fim_periodo' => 'required|date|after:'.$request->all()['data_inicio_periodo'],
            // 'quantidade_alunos'=> 'numeric|required|integer',
            //'data_final_inscricoes' => 'required|date|after:'.$request->all()['data_inicio_periodo'],
            'horarios' => 'required|min:3',
            'descricao' => 'required|min:3',

        ]);
        // dd($request->all());
        $facadesTurma = new FacadesTurma();
        if($facadesTurma->EditarTurma($request->all())){
            echo'Turma editada com sucesso';
        }
    }

    public function ExibirTurmaAtiva(){
        $data['titulo'] = 'Turmas Ativas';
        $facadesTurma = new FacadesTurma();
        $data['turma'] = $facadesTurma->retonarTurmaAtiva();

        return view('Administracao/TurmasAtivas', $data);
    }


    public function PaginaDeEdicaoDeTurma(Request $request){
        // dd($request);
        // die();
        $data['titulo'] = 'Turmas Ativas';
        $facadesTurma = new FacadesTurma();
        $data['turma'] = $facadesTurma->GetDadosDaTurmaComId($request['teste']);
        return view('Administracao/Edicaodeturma', $data);
    }

    public function InscricaoPrimeiroForm(Request $request){
        // dd($request->all());
        $request->validate(
            [
                'nacionalidade' => 'required|string',
                'estado_civil' => 'required|string',
                'telefone' => 'required|numeric'

            ]
            );
        $facadesTurma = new FacadesTurma();
        $dados = $request->all();
        $dados['user_id'] = Auth::user()->id;
        if($facadesTurma->cadastroPrimeiraformulario($dados)){
            // echo 'Cadastro feito com sucesso';
           return redirect()->route('form2');
        }

    }

    public function InscricaoSegundoForm(Request $request){
        // dd($request->all());
        $facadesTurma = new FacadesTurma();
        if($facadesTurma->FazendoAInscricaoDoSegundoFormulario($request->all())){
            // echo 'Cadastro feito com sucesso';
           return redirect()->route('form3');
        }
    }

    public function InscricaoTerceiroForm(Request $request){
        $facadesTurma = new FacadesTurma();
        if($facadesTurma->inscricaoTerceiroForm($request->all())){
           return redirect()->route('form4');
        }
    }

    public function InscricaoQuartoForm(Request $request){
        // dd($request->all());
        $facadesTurma = new FacadesTurma();
        if($facadesTurma->CadastroDeEndereco($request->all())){
           return redirect()->route('form5');
        }
    }

    public function cadastroQuintoFormulario(Request $request){
        // dd($request->all());
        $facadesTurma = new FacadesTurma();
        if($facadesTurma->inscricaoQuintoFormulario($request->all())){
           return redirect()->route('form6');
        }

    }

    // public function
}