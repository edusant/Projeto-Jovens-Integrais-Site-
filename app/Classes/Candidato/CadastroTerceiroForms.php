<?php
namespace App\Classes\Candidato;
use App\Classes\Interfaces\Cadastro;
use App\Models\terceiroform;
use Illuminate\Support\Facades\Auth;
class CadastroTerceiroForms implements Cadastro{
    public function cadastro($request){
        return terceiroform::create(
            [
                'status_trabalho' => $request['status_trabalho'],
                'com_quem_mora' => $request['moracomquem'],
                'cargo' => $request['cargo'],
                'renda'=> $request['renda'],
                'quatidade_moradores_na_casa' => $request['quantidade'],
                'ultimo_cargo' => $request['ultimocargo'],
                'user_id' => Auth::user()->id
            ]);
    }

}


