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
    <script src="<?= base_url('assests/css/bootstrap.min.js')?>"></script>
    <script src="<?= base_url('assests/jqu/jquery-ui.js')?>"></script>
  <link href="<?= base_url('assests/jqu/jquery-ui.css')?>" rel="stylesheet">
   <script src="<?= base_url('assests/js/jquery.validate.min.js') ?>"></script>
  <script src="<?= base_url('assests/js/additional-methods.min.js')?>"></script>
  <script src="<?= base_url('assests/js/messages_pt_BR.js') ?>"></script>

    
    <link rel="shortcut icon" type="text/css" href="img/5stdy_logo.png">
</head>

 <body>
  <!-- <img class="card-img" src="img/negocio.jpg" height="500" alt="Card image"> -->
  <div class="tudo">
  
  <div id="topo">
    <!-- inicio do menu -->
      <?php $this->load->view("nav"); ?>
 
    <!-- Fim do menu -->
   
   </div>
  
  <div class="conteudo">
     <div class="container p-5">
    <div class="row">
      <div class="col-md-6">
        
        <img style="width: 100%" src="<?= base_url('assests/img/form/undraw_dream_world_cin1.svg') ?>">

      </div>
      <div class="col-md-6">
        <h1>Avaliação de pratica de vida integral (parte 5)</h1>
        <hr>
        
    <form method="post" id="dadosestu" action="<?= base_url('Cadastro/cadastrarinfopartetres') ?>">
      <div class="form-group">
        <div class="form-group">
       <label class="h5">Como você se vê em relação aos outros?</label>
       <textarea class="form-control texto" required name="comooutrosteveem" rows="4" cols="11">
         
       </textarea>
       </div>
       <div class="form-group">
       <label class="h5">Como você acha que os outros te veem?</label>
       <textarea class="form-control texto" required name="comoseveroutros"  rows="4" cols="11">
         
       </textarea>
       </div>
       <div class="form-group">
       <label class="h5">Qual o seu maior sonho?</label>
       <textarea class="form-control texto" required name="qualomaiorsonho" rows="4" cols="11">
         
       </textarea>
       </div>
       <div class="form-group">
       <label class="h5">Em sua opinião, qual o significado da vida?</label>
       <textarea class="form-control texto" required name="siginifivadodavida" rows="4" cols="11">
         
       </textarea>
       </div>
       <div class="form-group">
        <label class="h5">De que tipo de auxílio você entende que precisa para realizar seus sonhos?</label>
       <textarea class="form-control texto" required name="auxiliopararealizaesonho" rows="4" cols="11">
         
       </textarea>
       </div>



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
      url: "<?= base_url('cadastro/pdados') ?>",
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



