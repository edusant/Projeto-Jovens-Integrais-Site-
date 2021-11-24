<?php

namespace App\Classes\Candidato;
use App\Classes\Interfaces\Cadastro;
use App\Models\primeiroform;
use App\Models\segundoforms;
use Illuminate\Support\Facades\Auth;

class CadastroDoSegundoForms implements Cadastro{
    public function cadastro($request){
        return segundoforms::create(
            [
                "nome_responsavel" => $request['nome_responsavel'],
                "nascimento_responsavel" => $request['nascimento_responsavel'],
                "telefone_responsavel" => $request['telefone_responsavel'],
                "grau_de_parentesco" => $request['grau_de_parentesco'],
                'user_id' => $request['user_id']
            ]);
    }

}


