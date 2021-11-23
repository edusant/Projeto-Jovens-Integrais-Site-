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
            <h1 class="h3 mb-0 text-gray-800">Abrir turmas</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Adminstração</li>
            </ol>
          </div>
         <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Lista de espera turma</h6>
                </div>
                <div class="card-body">
                  <!-- <span id="retorno"></span>  -->
                    <table class="table table-striped table-inverse table-responsive">
                        <thead class="thead-inverse">
                            <tr>
                                <th>Nome</th>
                                <th>email</th>
                                <th>ação</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">Eduardo S Silva</td>
                                    <td>recado230@gmail.com</td>
                                    <td><!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modelId">
                                      avaliar perfil
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Eduardo S Silva</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                </div>
                                                <div class="modal-body">
                                                    <small class="text-muted">Data de nascimento: 08/12/1995</small>
                                                    <br>
                                                    <small class="text-muted">Data de nascimento: 08/12/1995</small>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">fechar</button>
                                                    <button type="button" class="btn btn-primary">Aprovar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div></td>
                                </tr>
                                <tr>
                                    <td scope="row"></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                    </table>

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
  <script>
    $(document).ready(function(){
      $.ajax({
        url: "<?= url('Administracao/Pegarlistadeespera') ?>",
        success: function(data){
        $('#retorno').html(data)
      }
    });
    })
  </script>

</body>

</html>
