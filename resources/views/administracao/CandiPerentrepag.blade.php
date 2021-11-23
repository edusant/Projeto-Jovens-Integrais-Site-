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
            <h1 class="h3 mb-0 text-gray-800">Lista de  entrevistas</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item active"><a href="<?= url('Administracao') ?>">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?= url('Administracao/listadeespera') ?>">Lista de espera</a></li>
              <li class="breadcrumb-item active" aria-current="page">Dados do candidato</li>

            </ol>
          </div>
         <div class="card mb-4">
                <div class="card-body">

                 <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                    <tr>
                         <th>Nome</th>
                         <th>E-mail</th>
                         <th>Data da entervista</th>
                         <th>Dados</th>
                       </tr>
                     </thead>
                     <tbody>
                  <tr>

                         <td>'.$valor['nome'].'</td>
                         <td>'.$valor['email'].'</td>
                         <td>'.date( 'd/m/Y', strtotime($valor['data'])).' - '.$valor['horario'].'</td>
                         <td><a href="{{url('Administracao/perfilcandidato?candi=1&luga=true')}}" class="btn btn-sm btn-info">Ver Perfil</a></td>
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
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->

</body>

</html>
