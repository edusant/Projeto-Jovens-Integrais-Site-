<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?= $titulo ?></title>
  <link rel="stylesheet" href="<?= url('assests/css/estilo.css')?>">
    <script src="<?= url('assests/js/jquery.min.js')?>"></script>
    <link rel="stylesheet" href="<?= url('assests/css/bootstrap.min.css')?>">
    <script src="<?= url('assests/js/popper.min.js')?>"></script>
    <script src="<?= url('assests/jqu/jquery-ui.js')?>"></script>
  <link href="<?= url('assests/jqu/jquery-ui.css')?>" rel="stylesheet">
   <script src="<?= url('assests/js/jquery.validate.min.js') ?>"></script>
  <script src="<?= url('assests/js/additional-methods.min.js')?>"></script>
  <script src="<?= url('assests/js/messages_pt_BR.js') ?>"></script>
      <script src="https://kit.fontawesome.com/5778d43f78.js" crossorigin="anonymous"></script>
<script src="<?= url('assests/js/bootstrap.min.js')?>" ></script>





    <!-- <link rel="shortcut icon" type="text/css" href="<?= url('assests/img/5stdy_logo.png')?>"> -->
</head>
<body>

    <div class="tudo">


  <div id="topo" >
  @include('nav')


</div>




  <div  class="conteudo avv">
     <div class="container text-center">
    <br><br><br>
          <p class="display-4">Faça sua doação via PAYPAL de forma simples, rápida e segura</p>
          <button class="btn btn-info">Doar</button>



        </div>
        <br><br><br><br>
      </div>
  </div>


  <div class="rodape cordepe">
    @include('auxilio/footer')
  </div>


</div>
</body>
</html>
