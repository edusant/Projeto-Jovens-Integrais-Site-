<?php

namespace App\Classes\Turma;
use App\Classes\Interfaces\getdados;
use App\Models\turmas;

class GetDadosDaTurmaAtiva implements getdados{
    public function retorno()
    {
        return turmas::where('status', '=', 1)->first();
    }



}
