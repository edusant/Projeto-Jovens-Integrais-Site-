<?php

namespace App\Classes\Fachadas;

use App\Classes\Candidato\CadastroDoSegundoForms;
use App\Classes\Candidato\CadastroEndereco;
use App\Classes\Candidato\CadastroPrimeiroForms;
use App\Classes\Candidato\CadastroQuintoFormulario;
use App\Classes\Candidato\CadastroTerceiroForms;
use App\Classes\Turma\AbrirTurma;
use App\Classes\Turma\EditarTurmaDAO;
use App\Classes\Turma\GetDadosDaTurmaAtiva;
use App\Classes\Turma\GetDadosDaTurmaComIdDAO;

class FacadesTurma {
    public function AbrirTurma($request){
        $objturma = new AbrirTurma();
        return $objturma->cadastro($request);
    }

    function retonarTurmaAtiva(){
        $get = new GetDadosDaTurmaAtiva();
        return $get->retorno();
    }

    function GetDadosDaTurmaComId($id){
        $get = new GetDadosDaTurmaComIdDAO();
        return $get->retorno($id);
    }

    public function EditarTurma($request){
        $turma = new EditarTurmaDAO();
        return $turma->atualizar($request);
    }

    public function cadastroPrimeiraformulario($request){
        $cadastro = new CadastroPrimeiroForms();
        return $cadastro->cadastro($request);
    }

    public function FazendoAInscricaoDoSegundoFormulario($request){
        $cadastro = new CadastroDoSegundoForms();
        return $cadastro->cadastro($request);
    }

    public function inscricaoTerceiroForm($request){
        $cadastro = new CadastroTerceiroForms();
        return $cadastro->cadastro($request);
    }

    public function CadastroDeEndereco($request){
        $cadastro = new CadastroEndereco();
        return $cadastro->cadastro($request);
    }

    public function inscricaoQuintoFormulario($request){
        $cadastro = new CadastroQuintoFormulario();
        return $cadastro->cadastro($request);
    }

}
