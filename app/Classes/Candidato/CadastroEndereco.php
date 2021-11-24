<?php

namespace App\Classes\Candidato;
use App\Classes\Interfaces\Cadastro;
use App\Models\endereco;
use Illuminate\Support\Facades\Auth;

class CadastroEndereco implements Cadastro{
    public function cadastro($request){
        return endereco::create(
            [

                'Rua' => $request['rua'],
                'Bairro' => $request['bairro'],
                'Cidade' => $request['cidade'],

                'CEP' => $request['cep'],
                'Numero' => $request['num'],
                'UF' => $request['uf'],
                'user_id' => $request['user_id']
            ]);
    }

}


