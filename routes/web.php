<?php

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/Cadastro', function () {
    $data['titulo'] = 'Fazer cadastro';
    return view('Usuario/Inscrevase', $data);
});

Route::get('/','HomeController@index');

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/register', 'HomeController@index')->name('home');

Auth::routes();

Route::get('QuemSomos', 'HomeController@QuemSomos')->name('QuemSomos');

Route::get('Institucional/doacoes', 'HomeController@Institucional_doacoes')->name('Institucional.doacoes');

Route::get('Contato', 'HomeController@Contato')->name('Contato');

Route::get('Participante/Cadastro/1', function () {
    return view('candidato/primeiroform',['titulo' => 'Primeiro form']);
})->name('form1')->middleware('auth');

Route::post('cadastro/primeiro/form','TurmasController@InscricaoPrimeiroForm')->middleware('auth')->name('cadastro.primeiro.form');

Route::post('Cadastro/Escolaridade/candidato', 'TurmasController@cadastroQuintoFormulario')->middleware('auth')->name('Cadastro.Escolaridade.candidato');


Route::get('Participante/Cadastro/2', function () {
    return view('candidato/segundoform',['titulo' => 'segundo form']);
})->name('form2')->middleware('auth');

Route::post('fazer/cadastro/segundo/form', 'TurmasController@InscricaoSegundoForm')->name('fazer.cadastro.segundo.form')->middleware('auth');

Route::get('Participante/Cadastro/3', function () {
    return view('candidato/terceiroform',['titulo' => 'Terceiro form']);
})->name('form3')->middleware('auth');

Route::post('cadastro/terceiro/forms','TurmasController@InscricaoTerceiroForm')->middleware('auth')->name('cadastro.terceiro.forms');


Route::get('Participante/Cadastro/4', function () {
    return view('candidato/quartoform',['titulo' => 'Quarto form']);
})->name('form4')->middleware('auth');

Route::post('candidato/cadastro/quarto/form', 'TurmasController@InscricaoQuartoForm')->middleware('auth')->name('candidato.cadastro.quarto.form');

Route::get('Participante/Cadastro/5', function () {
    return view('candidato/quintoform',['titulo' => 'Quinto form']);
})->name('form5');


Route::post('Cadastro/cdastrodehistoria', 'TurmasController@cadastroSextoFormulario')->name('Cadastro.cdastrodehistoria');



Route::get('Participante/Cadastro/6', function () {
    return view('candidato/FormdeAvalicaoiniPartum',['titulo' => 'Sexto form']);
})->name('form6');

Route::get('Participante/Cadastro/7', function () {
    return view('candidato/FormdeAvalicaoiniPartDois',['titulo' => 'Setimo form']);
})->name('form7');


// Route::get('Participante/Cadastro/8', function () {
//     return view('candidato/FormdeAvalicaoiniPartTres',['titulo' => 'Oitavo form']);
// })->name('form8');

Route::get('Adm/Abrir/Turma', function () {
    // echo'Okay';
    return view('Adm/abrirturma',['titulo' => 'Abrir Turma']);
})->name('adm.abrirtyurma');

Route::get('Administracao/listadeespera', function () {
    return view('administracao/listadeespera', ['titulo' => 'Liista de espera']);
});



Route::get('Administracao/abrirturma', function(){
    return view('Adm/abrirturma',['titulo' => 'Abrir Turma']);
});

Route::get('Administracao/turmas/ativas', 'TurmasController@ExibirTurmaAtiva');


Route::get('Administracao/lista', function () {
    return view('Administracao/listaalmoco', ['titulo' => 'Lista chamada']);
});


Route::get('Administracao/gerenciarTurma', function () {
    return view('Administracao/gerenciarTurma', ['titulo' => 'Lista chamada']);
});

Route::get('Administracao/CandiPerentre', function () {
    return view('Administracao/CandiPerentrepag', ['titulo' => 'Lista chamada']);
});

Route::get('Administracao/gerenciarParticipante', function () {
    return view('Administracao/gerenciarParticipante', ['titulo' => 'Lista de alunos']);
});


Route::get('Administracao/perfilcandidato', function () {
    // echo'Okay, meu fi';
    return view('Administracao/perfilcandidato', ['titulo' => 'Lista de alunos']);
});

Route::get('Administracao/perfilcandidatoAvaliar', function () {
    // echo'Okay, meu fi';
    return view('Administracao/perfilcandidatoAvaliar', ['titulo' => 'Lista de alunos']);
});




Route::post('Adinistrador/Abrir/Turma', 'TurmasController@AbrirTurma')->name('Adm.Abrir.Turma');

Route::get('Gerenciar/dados/turma/{teste}/tes', 'TurmasController@PaginaDeEdicaoDeTurma')->name('Gerenciar.turma');


Route::post('Adm/Editar/Turma', 'TurmasController@EdicaoDeTurma')->name('Adm.Editar.Turma');
