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




  <div  class="conteudo">
     <div class="container">
    <br><br><br>
        <div class="row">
          <div class="col-md-6">
            <p class="h3">Fale com a gente</p>
            <p class="h3">Felefone: (11) 1111-1111</p>
              <p class="h6">Endereço: Rua de gente bonita N° 0 </p>
              <iframe  width="100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14631.830906991197!2d-46.58047673081922!3d-23.53402280514114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5ee7acdd50f5%3A0x3eeaf24eff368507!2zVGF0dWFww6ksIFPDo28gUGF1bG8gLSBTUA!5e0!3m2!1spt-BR!2sbr!4v1576645566825!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
              <hr>
          </div>
          <div class="col-md-6">
            <form action="#">

            <p class="h3">Envie-nos uma mensagem</p>
  <div class="form-group">
    <label for="nome">Seu nome</label>
    <input type="text" class="form-control" id="nome" placeholder="Nome completo">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" placeholder="exemplo@exemplo.com">
  </div>
  <div class="form-group">
    <label for="assunto">Assunto</label>
    <input type="text" class="form-control" id="assunto" placeholder="Coloque aqui o assunto">
  </div>
  <div class="form-group">
    <label for="mensagem">mensagem</label>
     <textarea class="form-control" id="mensagem" rows="5" placeholder="Conte-nos sua mensagem aqui"></textarea>
  </div>

  <button type="submit" class="btn btn-info">Enviar a sua mensagem</button>
  <br><br><br>
</form>
          </div>
        </div>
      </div>
  </div>


  <div class="rodape cordepe">
    @include('auxilio/footer')
</div>


</div>
</body>
</html>
