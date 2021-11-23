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
          <div class="row">
            <div class="col-md-2">
              <p>Conversas</p>
            </div>
            <div class="col-md-10">
              <div class="card l" style="width: 80%;">
              <div class="card-body">
              <p class="card-text">With supporting text below as a natural lead-in to additional content.
              With supporting text below as a natural lead-in to additional content. With supporting text below as a natural lead-in to additional content. With supporting text below as a natural lead-in to additional content.</p>
              
              </div>
              <div class="card-footer l">02-05-2020</div>
              </div>

              <div class="card r" style="width: 80%; margin-left: 20%; margin-top: 30px ">
              <div class="card-body">
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              
              </div>
              <div class="card-footer r">02-05-2020</div>
              </div>

              
              <div class="row">
            <div style="width: 100%; margin-top: 40px">
            
              <input type="" style="width: 80%" name="">
              
              
              <button class="btn btn-info" style="width: 18%" >Enviar</button>
              
            </div>  
            </div>

            
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
<style>
  .l{
  /*padding: 10px;*/
  border: 2px;
  background-color: #e4dcd4;
  border-radius: 12px;
  /*width: 50%;*/
  }
  .r{
  border: 2px;
  background-color: #32AE6D;
  border-radius: 12px;
  color: white;
  }
</style>
</body>

</html>