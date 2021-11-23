<?php

namespace App\Classes\Turma;
use App\Classes\Interfaces\Cadastro;
use App\Models\turmas;
use Illuminate\Support\Facades\Auth;

class AbrirTurma implements Cadastro{
    public function cadastro($turma){
        return turmas::create([

            'nome' => $turma["nome_turma"],
            'data_inicio_periodo' => $turma["data_inicio_periodo"],
            'data_fim_periodo' => $turma['data_fim_periodo'],
            //'data_inicio_aulas' => $turma["data_inicio_aula"],
            'data_fim_da_inscricao' => $turma["data_final_inscricoes"],
            'horario_das_aulas' => $turma["horarios"],
            'descricao' => $turma["descricao"],
            'user_id' => Auth::user()->id
        ]);
    }

}
