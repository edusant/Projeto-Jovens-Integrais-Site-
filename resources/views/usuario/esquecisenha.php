<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?= $titulo ?></title>
  <link rel="stylesheet" href="<?= base_url('assests/css/estilo.css')?>">
    <script src="<?= base_url('assests/js/jquery.min.js')?>"></script>
    <link rel="stylesheet" href="<?= base_url('assests/css/bootstrap.min.css')?>">
    <script src="<?= base_url('assests/js/popper.min.js')?>"></script>
    <script src="<?= base_url('assests/jqu/jquery-ui.js')?>"></script>
  <link href="<?= base_url('assests/jqu/jquery-ui.css')?>" rel="stylesheet">
   <script src="<?= base_url('assests/js/jquery.validate.min.js') ?>"></script>
  <script src="<?= base_url('assests/js/additional-methods.min.js')?>"></script>
  <script src="<?= base_url('assests/js/messages_pt_BR.js') ?>"></script>
      <script src="https://kit.fontawesome.com/5778d43f78.js" crossorigin="anonymous"></script>
<script src="<?= base_url('assests/js/bootstrap.min.js')?>" ></script>    
    <!-- <link rel="shortcut icon" type="text/css" href="<?= base_url('assests/img/5stdy_logo.png')?>"> -->
</head>
<body>

    <div class="tudo">
  
  <div id="topo" >
  <?php $this->load->view("nav"); ?>
 
</div>



  
  <div  class="conteudo">
    <div class="container avv">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block text-center">
            <br><br><br>
            <p class="display-4">Projeto</p>
            <p class="display-4">Jovens</p>
            <p class="display-4">Integrais</p>
          </div>
          <div class="col-lg-7 ">
     <div class="p-5">
                  <div class="text-center">
                    

                    <?php
                    if($this->session->flashdata('danger')) {
                      echo "<p class='alert alert-danger'>".$this->session->flashdata('danger')."</p>";

                    }
                    elseif ($this->session->flashdata('errologin')) {
                      echo "<p class='alert alert-danger'>".$this->session->flashdata('danger')."</p>";
                    }
                    else {
                      echo '<h1 class="h4 text-gray-900 mb-2">Esqueceu sua senha?</h1>
                    <p class="mb-4">Não se preocupe, nós enviaremos um código de recuperação de senha para o seu e-mail</p>';
                    }
                    if (isset($_GET['email'])) {
                      $email = $_GET['email'];
                    }
                    else
                    {
                      $email = null;
                    }
                    ?>
                  </div>
                  <form class="user">
                    <div class="form-group">
                      <input type="email" value="<?= $email ?>" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Digite o seu email aqui">
                    </div>
                    <a href="login.html"  class="btn btn-primary btn-user btn-block">
                      Recuperar senha
                    </a>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="<?= base_url('candidato/inscrevase') ?>">Fazer cadastro</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="<?= base_url('usuario/login') ?>">Já tem conta? Faça login!</a>
                  </div>
                </div>
          </div>
        </div>
      </div>
    </div>

  </div> 
   
  </div>
   
  
  <div class="rodape cordepe">
                  <?php $this->load->view("auxilio/footer"); ?>

  </div>
  
  
</div>
</body>
</html>