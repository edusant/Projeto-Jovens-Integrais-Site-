<?php

namespace App\Classes\Candidato;
use App\Classes\Interfaces\Cadastro;
use App\Models\quintoform;
use Illuminate\Support\Facades\Auth;

class CadastroQuintoFormulario implements Cadastro{
    public function cadastro($request){
        return quintoform::create(
            [
                'grau' => $request['escolaridade'],
                'periodo' => $request['periodo'],
                'user_id' => $request['user_id']
            ]);
    }

}
