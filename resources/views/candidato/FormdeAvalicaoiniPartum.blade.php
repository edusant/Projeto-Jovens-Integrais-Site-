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
    <script src="<?= url('assests/css/bootstrap.min.js')?>"></script>
    <script src="<?= url('assests/jqu/jquery-ui.js')?>"></script>
  <link href="<?= url('assests/jqu/jquery-ui.css')?>" rel="stylesheet">
   <script src="<?= url('assests/js/jquery.validate.min.js') ?>"></script>
  <script src="<?= url('assests/js/additional-methods.min.js')?>"></script>
  <script src="<?= url('assests/js/messages_pt_BR.js') ?>"></script>
    <link rel="shortcut icon" type="text/css" href="img/5stdy_logo.png">
</head>

 <body>
  <div class="tudo">

  <div id="topo">
    <!-- inicio do menu -->
      <?php //$this->load->view("nav"); ?>

    <!-- Fim do menu -->

   </div>

  <div class="conteudo">
     <div class="container p-5">
    <div class="row">
      <div class="col-md-6">
        <img style="width: 100%" src="<?= url('assests/img/form/undraw_dream_world_cin1.svg') ?>">

      </div>
      <div class="col-md-6">
        <h1>Sobre a sua história de vida</h1>
        <hr>

    <form method="post" id="dadosestu" action="{{route('Cadastro.cdastrodehistoria')}}">
      <div class="form-group">
        <div class="form-group">
       <label class="h5">Conte uma história de superação (desafio) que você já viveu.</label>
       <textarea class="form-control" name="historiadesuperacao" rows="4" cols="11"></textarea>
       @csrf

       <label class="h5">Conte uma história que te deixou feliz (motivado, empolgado, etc.).</label>
       <textarea class="form-control" name="historiaquetedeixoufeliz" rows="4" cols="11"></textarea>
     </div>

  </div>
<button class="btn btn-info">Cadastrar</button>


      <br><br>


</form>
</div>
</div>
</div>
    </div>
  </div>

  </div>
  <div class="rodape">
     <footer class="page-footer font-small">
  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="#"> Tecnojus</a>
  </div>
  <!-- Copyright -->

</footer>
  </div>

</div>
   <script>

      $( "input" ).checkboxradio({
      icon: false
    });

  </script>
  <script>

    $("#dadosestu").validate({
  rules: {
    estuda:{
      required: true
    }
  },
                highlight: function ( element, errorClass, validClass ) {
                    $( element ).addClass( "is-invalid" ).removeClass( "is-valid" );
                },
                unhighlight: function (element, errorClass, validClass) {
                    $( element ).addClass( "is-valid" ).removeClass( "is-invalid" );
                }, errorPlacement: function(error, element)
        {
            if ( element.is(":radio") )
            {
                error.appendTo( element.parents('.z') );
            }
            else
            { // This is the default behavior
                error.insertAfter( element );
            }
         }
})
</script>
<style type="text/css">
  .sumir{
    display: none;
  }
  .ajustando{
    width: 30%;
  }

  @media (max-width: 600px)
{
  .ajustando{
    width: 50%;
  }
}

</style>
<script>
  $(document).ready(function(){


    $.ajax({
      url: "<?= url('cadastro/pdados') ?>",
      method: 'post',
      data: {data: 6},
      success: function(data){
        dados = JSON.parse(data)
        // alert(data)
        if (dados.historiafelicidade !== null)
        {
          $('[name=historiaquetedeixoufeliz]').val(dados.historiafelicidade);
        }
        if (dados.historiasuperacao !== null)
        {
          $('[name=historiadesuperacao]').val(dados.historiasuperacao);
        }
      }
    })

   })
</script>

</body>

</html>
