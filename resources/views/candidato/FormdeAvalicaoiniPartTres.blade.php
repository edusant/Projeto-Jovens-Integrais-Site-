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
  <!-- <img class="card-img" src="img/negocio.jpg" height="500" alt="Card image"> -->
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
        <h1>Avaliação</h1>
        <hr>

    <form method="post" id="dadosestu" action="<?= url('Cadastro/dehistoriaDeMotivacao') ?>">
      <div class="form-group">
        <!-- <label class="h4">Cite três situações que causaram mudanças em sua vida</label> -->
        <!-- <hr> -->
        <!-- dashed double -->



       <!-- <div class="form-group p-3" style="border-style: groove; border-radius: 5px">
        <label class="h5">Segunda situação de mudança</label>

        <input type="text" class="form-control" name="mudancadois">
       <label class="h5">O que esta mudança causou em sua vida?</label>
       <textarea class="form-control texto" required name="mudancaum" rows="4" cols="11">

       </textarea>
       </div>



       <div class="form-group p-3" style="border-style: groove; border-radius: 5px">
        <label class="h5">Terceira situação de mudança</label>

        <input type="text" class="form-control" name="mudancaum">
       <label class="h5">O que esta mudança causou em sua vida?</label>
       <textarea class="form-control texto" required name="mudancatres" rows="4" cols="11">

       </textarea>
       </div> -->











<button type="submit" class="btn btn-info">Cadastrar</button>
  </div>


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
$(document).ready(function(){
$('.texto').val('')

})


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
  .error{
    color: red
  }

  @media (max-width: 600px)
{
  .ajustando{
    width: 50%;
  }
}

</style>

<script>
  $.ajax({
      url: "<?= url('cadastro/pdados') ?>",
      method: 'post',
      data: {data: 9},
      success: function(data){
         // alert(data)
        dados = JSON.parse(data)
        if(dados.comooutrosteveem !== undefined)
        {
          $('[name=comooutrosteveem]').val(dados.comooutrosteveem)
        }
        if(dados.comoseveroutros !== undefined)
        {
          $('[name=comoseveroutros]').val(dados.comoseveroutros)
        }

        if(dados.qualomaiorsonho !== undefined)
        {
          $('[name=qualomaiorsonho]').val(dados.qualomaiorsonho)
        }
        if(dados.qualomaiorsonho !== undefined)
        {
          $('[name=qualomaiorsonho]').val(dados.qualomaiorsonho)
        }
        if(dados.siginifivadodavida !== undefined)
        {
          $('[name=siginifivadodavida]').val(dados.siginifivadodavida)
        }
        if(dados.auxiliopararealizaesonho !== undefined)
        {
          $('[name=auxiliopararealizaesonho]').val(dados.auxiliopararealizaesonho)
        }
      }
    })
</script>
</body>

</html>
