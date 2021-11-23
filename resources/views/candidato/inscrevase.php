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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>    



<script>
  
  $(document).ready(function(){
    $('[name=cpf]').mask('00000000000');
    // $('[name=datanascimento]').mask('00/00/0000');

    $('#continuar').click(function(){
      $('#sumir').hide();
      $('.aviso').show();
    })
  })
</script>










<script src="https://apis.google.com/js/platform.js" async defer></script>
<meta name="google-signin-client_id" content="1047047902076-oi0l37m2c1rp8e54p335q7ml40cocmhp.apps.googleusercontent.com">

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
            <div class="p-5" id="sumir">
              <p>Para se inscrever no programa jovens integrais, é necessário ter uma idade 
              dentre 15 e 30 anos </p>
              <button id="continuar" class="btn btn-info btn-block">Seguir para o cadastro</button>
            </div>
            <div class="p-5 aviso">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Crie sua conta!</h1>
              </div>
          
               <form id="formins" method="post" action="<?= base_url('Cadastro/inicioinscricao') ?>">
         <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control" name="nome" id="nome"
                    pattern="[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$" placeholder="nome">
                   
                  </div>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="sobrenome" id="sobrenome" placeholder="sobrenome" pattern="[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$">
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                     <p id="retornoemail" ></p>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-control-user" name="senha" id="senha" placeholder="Senha">
                  </div>
                <div class="form-group">
                 
                  <!-- <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="cpf" id="cpf" placeholder="CPF">
                  </div> -->
                  <div class="form-group">
                    <input type="date" class="form-control form-control-user" name="datanascimento" id="rsenha" placeholder="Data de nascimento">
                  </div>
                </div>
                <button id="validar" href="login.html" class="btn btn-primary btn-user btn-block">
                  Criar conta
                </button>
                <hr>
                <div class="g-signin2" data-onsuccess="onSignIn"></div>

                <a href="#" class="btn btn-google btn-user btn-block">
                  <i class="fab fa-google fa-fw"></i> Criar conta com google
                </a>
                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                  <i class="fab fa-facebook-f fa-fw"></i> criar conta com Facebook
                </a>
</form>
              <div class="text-center">
                <a class="small" href="#">Ao criar conta você concorda com nossos termos</a>
              </div>
              <hr>
              <div class="text-center">
                <a class="small" href="<?= base_url('usuario/esquecisenha') ?>">Esqueceu sua senha?</a>
              </div>
              <div class="text-center">
                <a class="small" href="#">Já possui conta? faça seu login!</a>
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
 <script>
$("#formins").validate({
  rules: {
    email:{
      required: true,
      email: true
    },
      cpf:{
      required:true,
      cpfBR: true
    },
    nome:{
      required: true,
      minlength: 3
    }, 
    sobrenome:{
      required: true,
      minlength: 3

    },
    datanascimento:{
      required: true,
      date: true,
      maxlength: 10
    },
    senha:{
      required: true,
      minlength: 8
    },

    rsenha:{
      required:true,
      equalTo:"#senha",
      minlength: 8
    }
  },
                errorElement: "em",
                errorPlacement: function ( error, element ) {
                    // Add the `invalid-feedback` class to the error element
                    error.addClass( "invalid-feedback" );

                    if ( element.prop( "type" ) === "checkbox" ) {
                        error.insertAfter( element.next( "label" ) );
                    } else {
                        error.insertAfter( element );
                    }
                },
                highlight: function ( element, errorClass, validClass ) {
                    $( element ).addClass( "is-invalid" ).removeClass( "is-valid" );
                },
                unhighlight: function (element, errorClass, validClass) {
                    $( element ).addClass( "is-valid" ).removeClass( "is-invalid" );
                }
})
</script>


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
          url: "<?= base_url('cadastro/CadastroComGoogle') ?>",
          method: 'post',
          data: {idBack: id, nomeBack: nome, imagemBack: imagem, emailBack: email},
          success: function(data)
          {
            alert(data)
            // window.location.href = data;
          }
        })
  }

}
</script>
</body>
</html>