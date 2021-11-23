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
  <link href="<?= base_url('assests/sistema/vendor/fontawesome-free/css/all.min.css')?> " rel="stylesheet" type="text/css">
  <link href="<?= base_url('assests/sistema/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css">
  <link href="<?= base_url('assests/sistema/css/ruang-admin.min.css')?>" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
      <?php $this->load->view('auxilio/navadmum') ?>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
                   <?php $this->load->view('auxilio/navadmdois') ?>

        <!-- Topbar -->
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Turma 2020</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Tables</li>
              <li class="breadcrumb-item active" aria-current="page">Aulas</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-12 mb-4">
              <!-- Simple Tables -->
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Gerenciar Aulas</h6>
                </div>
                <div id="retorno"></div>
                <!-- <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th>Aula</th>
                        <th>Data</th>
                        <th>Responsavel</th>
                        <th>Status</th>
                        <th>Informações</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Exploração do ser</td>
                        <td>02/12/1995</td>
                        <td>Ismael Gardelha</td>
                        <td><span class="badge badge-info">Em andamento</span></td>
                        <td><a href="#" class="btn btn-sm btn-primary">Informações</a></td>
                      </tr>
                      <tr>
                        <td>Exploração do ser</td>
                        <td>02/12/1995</td>
                        <td>Ismael Gardelha</td>
                        <td><span class="badge badge-success">Concluído</span></td>
                        <td><a href="#" class="btn btn-sm btn-primary">Informações</a></td>
                      </tr>
                      <tr>
                        <td>Exploração do ser</td>
                        <td>02/12/1995</td>
                        <td>Ismael Gardelha</td>
                        <td><span class="badge badge-danger">Cancelada</span></td>
                        <td><a href="#" class="btn btn-sm btn-primary">Informações</a></td>
                      </tr>
                      
                     
                    </tbody>
                  </table>
                </div> -->
                <div class="card-footer">
                  <a href="" class="btn btn-success">Tuma anterior</a>
                  <a href="" class="btn btn-info">Próxima turma</a>

                </div>
              </div>
            </div>
          </div>
          <!--Row-->
        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>copyright &copy; 2019 - Projetos Jovens integrais
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

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>

  <script src="<?= base_url('assests/sistema/vendor/jquery/jquery.min.js')?>"></script>
  <script src="<?= base_url('assests/sistema/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
  <script src="<?= base_url('assests/sistema/vendor/jquery-easing/jquery.easing.min.js')?>"></script>
  <script src="<?= base_url('assests/sistema/js/ruang-admin.min.js')?>"></script>
  <script>
    $(document).ready(function(){
      
       $.ajax({
          url: "<?= base_url('Administracao/CadastrarAula') ?>", 
          success: function(data){
          $('#retorno').html(data)
        }
      });

    })
  </script>
</body>

</html>