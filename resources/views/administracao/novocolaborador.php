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
            <h1 class="h3 mb-0 text-gray-800">Novo colaborador</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Adminstração</li>
            </ol>
          </div>
          <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Cadastro</h6>
                </div>
                <div class="card-body">
                  <form method="post" action="<?= base_url('Administracao/cadastrarColaborador') ?>">
                    <div class="row">
                      <div class="col-md-6">
                      <div class="form-group">
                      <label for="nome">Nome</label>
                      <input type="text" class="form-control" id="nome" name="nome">
                    </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                      <label for="sobrenome">Sobrenome</label>
                      <input type="text" class="form-control" id="sobrenome" name="sobrenome">
                    </div>
                    </div>

                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Senha</label>
                      <input type="password" name="senha" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="form-group">
                      <div class="custom-file">
                    <label>Permissão</label>
                    <select name="cargo" class="form-control">
                      <option value="">Escolha</option>
                      <option value="1">Coordenador</option>
                      <option value="2">Auxiliar</option>
                      <option value="3">Auxiliar(Operacional)</option>
                    </select>
                  </div>
                </div>

                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                  </form>
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

  <script src="<?= base_url('assests/sistema/vendor/jquery/jquery.min.js')?>"></script>
  <script src="<?= base_url('assests/sistema/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
  <script src="<?= base_url('assests/sistema/vendor/jquery-easing/jquery.easing.min.js')?>"></script>
  <script src="<?= base_url('assests/sistema/js/ruang-admin.min.js')?>"></script>
  <script src="<?= base_url('assests/sistema/vendor/chart.js/Chart.min.js')?>"></script>
  <script src="<?= base_url('assests/sistema/vendor/chart.js/Chart.min.js')?>"></script>


</body>

</html>