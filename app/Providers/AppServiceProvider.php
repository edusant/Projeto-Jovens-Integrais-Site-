<?php

namespace App\Providers;

use App\Classes\administrador;
use App\Classes\apresentacao\GetVideosMaisPopupinin;
use App\Classes\aulas;
use App\Classes\compras;
use Illuminate\Support\ServiceProvider;
use App\Classes\materia;
use App\Classes\perguntas_aulas;
use App\Classes\professor;
use App\Classes\questao;
use App\Classes\usuario;
use App\Classes\posts;
use App\Notifications\perguntasaula;
use Illuminate\Support\Facades\Schema;
use App\Classes\autotizacao;
use App\Classes\ArquivosAulas;
use App\Classes\autoridade\ValidarAutorizacaoColaborador;
use App\Classes\Fachadas\FacadesTurma;
use App\Classes\pegardados\PegarMateriaPeloIdAula;
use App\Classes\Permissoes\ValidarProfessoDoCurso;
use App\Classes\Permissoes\VerificarSeTemAutorizacaoDeProf;
use App\Classes\UsuarioParaAdministrador;
use App\Classes\validador\ValidarVarExiste;
use Carbon\Carbon;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {




        $this->app->singleton('FacadesTurma', function($app){
            return new FacadesTurma();
        });

        $this->app->singleton('Data_atual', function($app){
            return Carbon::now();
        });




    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);
        // Schema::('int')
    }
}
