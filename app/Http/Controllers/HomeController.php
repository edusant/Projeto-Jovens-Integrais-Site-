<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $dados['titulo'] = 'Página Inicial - PJI';
        return view('index', $dados);
    }

    public function QuemSomos(){
        $dados['titulo'] = 'Quem Somos - PJI';
        return view('institucional/quemsomos', $dados);
    }

    public function Institucional_doacoes(){
        // echo'Chega aqui, meu fi';
        $dados['titulo'] = 'Contribua - PJI';
        return view('institucional/doacoes', $dados);
    }
    //
    public function Contato(){
        // echo'Chega aqui, meu fi';
        $dados['titulo'] = 'Contribua - PJI';
        return view('institucional/contato', $dados);
    }


}
