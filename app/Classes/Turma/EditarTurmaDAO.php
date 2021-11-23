<?php
namespace App\Classes\Turma;
use App\Classes\Interfaces\Edicao;
use App\Models\turmas;

class EditarTurmaDAO implements Edicao{
    public function atualizar($request){
        // dd($turma);
        $turma = turmas::find($request['turma_id']);
        return $turma->update([
            'nome' => $request["nome_turma"],
            'data_inicio_periodo' => $request["data_inicio_periodo"],
            'data_fim_periodo' => $request['data_fim_periodo'],
            'data_fim_da_inscricao' => $request["data_final_inscricoes"],
            'horario_das_aulas' => $request["horarios"],
            'descricao' => $request["descricao"],
        ]);
    }

}
