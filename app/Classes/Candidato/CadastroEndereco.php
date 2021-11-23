<?php

namespace App\Classes\Candidato;
use App\Classes\Interfaces\Cadastro;
use App\Models\endereco;
use Illuminate\Support\Facades\Auth;

class CadastroEndereco implements Cadastro{
    public function cadastro($request){
        return endereco::create(
            [
                // "" => "08121290"
                // "f" => "4"
                // "" => "Rua Cândido da Rocha"
                // "" => "324"
                // "" => "Jardim Camargo Novo"
                // "" => "São Paulo"
                // "" => "SP"
                'Rua' => $request['rua'],
                'Bairro' => $request['bairro'],
                'Cidade' => $request['cidade'],
                // 'Estado',
                // 'Pais',
                'CEP' => $request['cep'],
                'Numero' => $request['num'],
                'UF' => $request['uf'],
                'user_id' => Auth::user()->id
            ]);
    }

}


