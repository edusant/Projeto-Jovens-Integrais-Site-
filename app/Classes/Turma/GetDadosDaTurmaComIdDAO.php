<?php

namespace App\Classes\Turma;
use App\Classes\Interfaces\getdados;
use App\Classes\Interfaces\GetDadosComParametros;
use App\Models\turmas;

class GetDadosDaTurmaComIdDAO implements GetDadosComParametros{
    public function retorno($id)
    {
        return turmas::where('id', '=', $id)->first();
    }


}
