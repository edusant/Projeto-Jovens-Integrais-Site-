<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title><?= $titulo ?></title>
  <link href="<?= url('assests/sistema/vendor/fontawesome-free/css/all.min.css')?> " rel="stylesheet" type="text/css">
  <link href="<?= url('assests/sistema/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css">
  <link href="<?= url('assests/sistema/css/ruang-admin.min.css')?>" rel="stylesheet">

</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    @include('auxilio.navadmum')
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        @include('auxilio.navadmdois')
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">



         <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Turma: {{$turma->nome}}</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Adminstração</li>
            </ol>
          </div>
         <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary"></h6>
                </div>
                <div class="card-body">
                <span id="retorno" class="m-5">
                    <nav class="nav nav-pills nav-fill">
                        <a class="nav-item nav-link active" href="#">Dados</a>
                        <a class="nav-item nav-link" href="#">Alunos</a>
                        <a class="nav-item nav-link" href="#">Chamadas</a>
                        <a class="nav-item nav-link" href="#">Lista de espera</a>
                      </nav>


                      <div class="card mt-5">

                          <div class="card-body">
                            <form action="{{route('Adm.Editar.Turma')}}" method="post">
                                @csrf
                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="form-group">
                                          <label for="descricao">Nome da turma</label>
                                          <input type="text" name="nome_turma" value="{{$turma->nome}}" class="form-control" id="">

                                          </textarea>
                                        </div>
                                      </div>

                                  <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="dataini">Inicio da turma</label>
                                    <input type="date" name="data_inicio_periodo" value="{{$turma->data_inicio_periodo}}" class="form-control" id="dataini"
                                    placeholder="Data para inicio das inscrições">
                                </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="datafim">Fim da turma</label>
                                      <input type="date" name="data_fim_periodo" value="{{$turma->data_fim_periodo}}" class="form-control" id="datafim"
                                    placeholder="Data para o fim das inscrições">
                                    </div>
                                  </div>


                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="datainicial">Quantidade de alunos</label>
                                      <input type="text" name="quantidade_alunos" value="{{$turma->quantidade_alunos}}" class="form-control" id="quan"
                                    placeholder="">
                                    </div>
                                  </div>
                                  <input type="hidden" name="turma_id" value="{{$turma->id}}">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="datainicial">Data limite para as inscrições</label>
                                      <input type="date" name="data_final_inscricoes" value="{{$turma->data_fim_periodo}}" class="form-control" id="datainicial"
                                    placeholder="Data para a inicio da Turma">
                                    </div>
                                  </div>

                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label for="horarios">Horarios das aulas (escreva os horários separados por vírgula)</label>
                                      <textarea cols="11" rows="7" class="form-control" id="horarios_aula"  name="horarios">{{$turma->horario_das_aulas}}</textarea>
                                    </div>
                                  </div>

                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label for="descricao">Descrição sobre a turma</label>
                                      <textarea cols="11" rows="7" class="form-control" id="descricao" name="descricao">{{$turma->descricao}}</textarea>
                                    </div>
                                  </div>

                                </div>

                                <button type="submit" class="btn btn-primary">Editar</button>
                              </form>
                              {{-- {{dd($turma)}} --}}
                            </div>
                      </div>
                </span>
                </div>
              </div>

      </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>copyright &copy; 2019 - Projeto jovens integrais

            </span>
          </div>
        </div>
      </footer>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="<?= url('assests/sistema/vendor/jquery/jquery.min.js')?>"></script>
  <script src="<?= url('assests/sistema/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
  <script src="<?= url('assests/sistema/vendor/jquery-easing/jquery.easing.min.js')?>"></script>
  <script src="<?= url('assests/sistema/js/ruang-admin.min.js')?>"></script>
  <script src="<?= url('assests/sistema/vendor/chart.js/Chart.min.js')?>"></script>
  <script src="<?= url('assests/sistema/vendor/chart.js/Chart.min.js')?>"></script>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->


</body>

</html>
