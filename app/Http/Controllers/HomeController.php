<?php

namespace App\Http\Controllers;

use App\Classes\administrador\PegarListaDeCategorias;
use App\Classes\Playlist\GetPlayListParaPaginaInicialDAO;
use App\Classes\podcast\GetPodcastPaginaInicialDAO;
use App\praodutos_trabalho;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use Illuminate\Support\Facades\DB;

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

    public function CadastrarProdutos(Request $data){
        // dd($data->all());
        $dados['titulo'] = null;
        $data = $data->all();
        $data['user_id'] = Auth::user()->id;
        if( praodutos_trabalho::create($data)){
            return view('GerenciarProdutos', $dados);
        }
        else{
            echo 'Produto cadastrado com sucesso';
        }



    }


}
