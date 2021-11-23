<?php

namespace App\Classes\Candidato;
use App\Classes\Interfaces\Cadastro;
use App\Models\primeiroform;
use Illuminate\Support\Facades\Auth;

class CadastroPrimeiroForms implements Cadastro{
    public function cadastro($request){
        return primeiroform::create(
            [
                'nacionalidade' => $request['nacionalidade'],
                'estado_civil' => $request['estado_civil'],
                'telefone' => $request['telefone'],
                'user_id' => $request['user_id']
            ]);
    }

}
