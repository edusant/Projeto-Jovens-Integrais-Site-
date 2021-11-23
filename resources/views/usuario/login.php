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
<script src="https://apis.google.com/js/platform.js" async defer></script>
<meta name="google-signin-client_id" content="1047047902076-oi0l37m2c1rp8e54p335q7ml40cocmhp.apps.googleusercontent.com">

    
    <!-- <link rel="shortcut icon" type="text/css" href="<?= base_url('assests/img/5stdy_logo.png')?>"> -->
</head>
<body>

    <div class="tudo">
  
  <div id="topo" >
  <?php $this->load->view("nav"); ?>
 
</div>



  
  <div  class="conteudo">
    <div class="container">

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
                    <h1 class="h4 text-gray-900 mb-4">Fazer login</h1>
                  </div>
                  <form action="<?= base_url('usuario/fazerLogin') ?>" method="post">
                    <?php
                    if($this->session->flashdata('danger')) {
                      echo "<p class='alert alert-success'>".$this->session->flashdata('danger')."</p>";
                    }
                    elseif ($this->session->flashdata('errologin')) {
                      echo "<p class='alert alert-danger'>".$this->session->flashdata('errologin')."</p>";
                    }
                    ?>
                    <div class="form-group">
                      <input type="email" class="form-control" id="email" name="email" placeholder="Digite o email cadastrado">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" id="senha" name="senha" placeholder="Digte sua senha aqui">
                    </div>
                    <div class="form-group">
                      
                    </div>
                    <button href="#" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                    <hr>
                    <!-- <a href="#" class="btn btn-google btn-user btn-block">
                      <i class="fab fa-google fa-fw"></i> Login com Google
                    </a> -->
                    <div class="g-signin2" data-onsuccess="onSignIn"></div>
                    <a href="#" class="btn btn-facebook btn-user btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Login com Facebook
                    </a>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="<?= base_url('usuario/esquecisenha') ?>">Esqueci minha senha</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="<?= base_url('candidato/inscrevase') ?>">Cadastre-se no Projeto</a>
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
<script>
  function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  var id = profile.getId(); // Do not send to your backend! Use an ID token instead.
  var nome = profile.getName();
  var imagem = profile.getImageUrl();
  var email= profile.getEmail(); // This is null if the 'email' scope is not present.

  if(id !== ''){
    // alert(id)
    $.ajax({
          url: "<?= base_url('cadastro/LoginComGoogle') ?>",
          method: 'post',
          data: {idBack: id, nomeBack: nome, imagemBack: imagem, emailBack: email},
          success: function(data)
          {
            alert(data)
            window.location.href = data;
          }
        })
  }

}
</script>
</body>
</html>