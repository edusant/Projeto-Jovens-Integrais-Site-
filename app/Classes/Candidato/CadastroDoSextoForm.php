<?php

namespace App\Classes\Candidato;
use App\Classes\Interfaces\Cadastro;
use App\Models\sextoform;

class CadastroDoSextoForm implements Cadastro{
    public function cadastro($request){
        return sextoform::create(
            [
                'historia_superacao' => $request['historiadesuperacao'],
                'historia_motivacao' => $request['historiaquetedeixoufeliz'],
                'user_id' => $request['user_id']
            ]);
    }

}
