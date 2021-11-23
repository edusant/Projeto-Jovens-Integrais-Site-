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

   </div>
  <div class="conteudo">
     <div class="container p-5">
    <div class="row">
      <div class="col-md-6">
        <img style="width: 100%" src="<?= url('assests/img/form/undraw_studying_s3l7.svg') ?>">
      </div>
      <div class="col-md-6">
        <h2>Sobre seus estudos</h2>
        <hr>
    <form method="post" id="dadosestu" action="<?= route('Cadastro.Escolaridade.candidato') ?>">
        @csrf
      <div class="form-group">
        <fieldset>
<style type="text/css">
  .error{
    color: red
  }
</style>
<div class="form-group">
    <label class="h5">Qual o seu grau de escolaridade?</label>
    <select name="escolaridade" required   class="form-control">
      <option value="" disabled selected>Escolha</option>
      <option value="Ensino Fundamental (Cursando)">Ensino Fundamental (Cursando)</option>
      <option value="Ensino Fundamental (completo)">Ensino Fundamental (Completo)</option>
      <option value="Ensino Médio (Cursando)">Ensino Médio (Cursando)</option>
      <option value="Ensino Médio (completo)">Ensino Médio (Completo)</option>
      <option value="Ensino Superior (Cursando)">Ensino Superior (Cursando)</option>
      <option value="Ensino Superior (completo)">Ensino Superior (Completo)</option>
    </select>
</div>

<div class="form-group sumir" id="s">
  <label class="h5">
    Qual o seu curso?
  </label>
 <input type="text" name="nomedocursosuperior" pattern="[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ, ]+$" required class="form-control">
</div>


<div class="form-group sumir" id="su">
  <label class="h5">
    Qual o período (horário) das suas aulas?
  </label>
  <select name="periodo" required class="form-control">
    <option value="" selected="" disabled="">Escolha</option>
    <option value="Matutino">Matutino</option>
    <option value="Vespertino">Vespertino</option>
    <option value="Noturno">Noturno</option>
    <option value="Integral">Integral</option>

  </select>
</div>




<!-- <div class="form-group">
     <p class='z'>
      <label class="h5">Atualmente você faz algum curso de extensão ou livre?</label>
      <input type="radio" id="cursa" value="sim" name="cursa">Sim<br>
      <input type="radio" id="cursanao" value="não" name="cursa">Não<br>
    </p>
  </div>
      <div class="form-group sumir" id="ss">
    <label class="h5">Explique o curso que você faz atualmente</label>
    <textarea type="text" minlength="3" pattern="[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ, ]+$"  name="curso" required class="form-control" class="form-control"></textarea>
  </div>
  </div> -->
      <button class="btn btn-info">Cadastrar dados</button> <a href="#" class="btn btn-link">Cancelar</a>
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

$('[name=escolaridade]').change(function(){
  if ($('[name=escolaridade]').val() == "Ensino Fundamental (Cursando)")
  {
    $('#su').show()
    $('#s').hide()

  }
  else if ($('[name=escolaridade]').val() == "Ensino Médio (Cursando)")
  {
    $('#su').show()
    $('#s').hide()
  }
  else if ($('[name=escolaridade]').val() == "Ensino Superior (completo)")
  {
    $('#su').show()
    $('#s').hide()

  }
  else if ($('[name=escolaridade]').val() == "Ensino Superior (Cursando)")
  {

    $('#su').show()
    $('#s').hide()

  }
  else{
    $('#su').hide()
    $('#s').hide()

  }
})


  $("#estuda").click(function(){
    $('#estudasim').show()
  });

  $('#estudanao').click(function(){
    $('#estudasim').hide()
  })

  $('#cursa').click(function(){
    $('#ss').show()
  })

  $('#cursanao').click(function(){
   $('#ss').hide()
  })
})

    $("#dadosestu").validate({
  rules: {
    cursa:{
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
            {
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

  .z{
    margin-top: 15px
  }
</style>

<script>
  $(document).ready(function(){
    $.ajax
    ({
      url: "<?= url('cadastro/pdados') ?>",
      method: 'post',
      data: {data: 5},
      success: function(data)
        {
          // alert(data)
          dados = JSON.parse(data)
          if (dados.escolaridade != null)
          {
            $("[name=escolaridade]").val(dados.escolaridade)
          }
          if (dados.periodo !== null)
          {
            $('[name=periodo]').val(dados.periodo);
            $('#su').show()
            $('#s').hide()
          }

        }
    })
  })
</script>
</body>

</html>
