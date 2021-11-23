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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>




    <link rel="shortcut icon" type="text/css" href="img/5stdy_logo.png">
</head>

 <body>
  <!-- <img class="card-img" src="img/negocio.jpg" height="500" alt="Card image"> -->
  <div class="tudo">

  <div id="topo">


   </div>

  <div class="conteudo">
     <div class="container p-5">
    <div class="row">
      <div class="col-md-6">
      <img style="width: 100%" src="<?= url('assests/img/form/undraw_work_time_lhoj.svg') ?>">

      </div>
      <div class="col-md-6">
        <h2>Conte um pouco mais sobre você</h2>
        <hr>
    <form method="post" id="dadossocios" action="{{route('cadastro.terceiro.forms')}}">
      <div class="form-group">
          @csrf
        <fieldset>
<style type="text/css">
  .error{
    color: red
  }
</style>
    <div class="form-group">
    <label class="h5">Em qual opção você se adequa?</label>
    <select id="status_trabalho" name="status_trabalho" required class="form-control">
      <option selected disabled>Escolha</option>
      <option value="trabalhando">Trabalhando</option>
      <option value="desempregado">Desempregado</option>
      <option value="Nunca trabalhei">Nunca trabalhei</option>
    </select>
  </div>

    <div class="form-group sumir" id="forwork">
    <label class="h5">Qual o seu cargo atual?</label>
    <input type="text" minlength="4" pattern="[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$"  name="cargo" required id="cargo" class="form-control">
  </div>
  <div class="form-group sumir" id="desemprego">
    <label class="h5">Qual foi o seu ultimo cargo?</label>
    <input type="text" minlength="4" pattern="[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$"  name="ultimocargo" required id="ultimocargo" class="form-control">
  </div>


  </fieldset>    </div>
       <div class="form-row">
                        <div class="form-group col-md-12">
                            <label class="h5">Com quem você mora?</label>
                            <select id="moracomquem" required name="moracomquem" class="form-control">
                                <option disabled selected>Escolha</option>
                                <option value="pais">Meus Pais</option>
                                <option value="sozinho">Sozinho</option>
                                <option value="filhos">Meus filhos</option>
                                <option value="conjuge">Meu cônjuge</option>
                                <option value="conjuge com filhos">Meu cônjuge e filho(s)</option>
                                <option value="outro">Outro</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label class="h5">Somando a sua renda com a renda das pessoas que moram com você, quanto é,
aproximadamente, a renda familiar?</label>
                      <select name="renda" required class="form-control" id="renda">
                        <option disabled selected>Escolha a sua renda</option>
                        <option value="Até 1 salário mínimo (até R$ 998,00)">Até 1 salário mínimo (até R$ 998,00)</option>
                        <option value="De 1 a 2 salários mínimos (de R$ 998,00 até R$ 1.996,00)">De 1 a 2 salários mínimos (de R$ 998,00 até R$ 1.996,00)</option>
                        <option value="De 2 a 5 salários mínimos (de R$ 1.996,00 até  R$ 4.990,00)">De 2 a 5 salários mínimos (de R$ 1.996,00 até  R$ 4.990,00)</option>
                        <option value="De 5 a 10 salários mínimos (de R$ 4.990,00 até  R$ 9.980,00)"> De 5 a 10 salários mínimos (de R$ 4.990,00 até  R$ 9.980,00)</option>
                        <option value="Nenhuma renda">Nenhuma renda</option>

                      </select>
                    </div>
                        <div class="form-group col-md-12">

                        <label class="h5">Quantas Pessoas moram na sua casa?</label>
                            <input type="text" id="quantidade" class="form-control" style="width: 50px" name="quantidade">
                          </div>
                    </div>


  <div class="form-group sumir" id="fordese">
  </div>
    <div class="form-group sumir" id="forns">

  </div>
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
  $("#status_trabalho").change(function(){
    if($('#status_trabalho').val() == 'trabalhando') {
      $('#forwork').show()
      $('#fordese').hide()
      $('#forns').hide()
      $('#desemprego').hide()
    }
  });

   $("#status_trabalho").change(function(){
    if($('#status_trabalho').val() == 'Desempregado') {
    $('#forwork').hide()
    $('#fordese').show()
    $('#forns').hide()
    $('#desemprego').show()
  }
  });
   $("#status_trabalho").change(function(){
    if($('#status_trabalho').val() == 'Nunca trabalhei') {
    $('#forwork').hide()
    $('#fordese').hide()
    $('#forns').show()
    $('#desemprego').hide()
  }
  });

   });


    $("#dadossocios").validate({
  rules: {
    rendamensal:{
      required: true
    },
    status_trabalho:{
      required:true
    },
    quantidade:{
      required: true,
      digits: true
    },
    cargo:{
      minlength:5
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
          data: {data: 3},
          success: function(data){
        dados = JSON.parse(data)
        if (dados.estado != null) {
          $("#status_trabalho").val(dados.estado)
          if (dados.estado == 'trabalhando') {
            $('#forwork').show()
            $('#desemprego').hide()
            $('#cargo').val(dados.cargo)

          } else if(dados.estado == 'desempregado'){
            $('#desemprego').show()
            $('#forwork').hide();
            $('#ultimocargo').val(dados.ultimocargo)
          }

        }

        if (dados.comquemmora != null) {
            $("#moracomquem").val(dados.comquemmora)
          }

          if (dados.renda != null) {
            $("#renda").val(dados.renda)
          }


          if (dados.quantpess != null) {
            $('#quantidade').val(dados.quantpess)
          }

          if (dados.ultimocargo != null) {
            $('#ultimocargo').val(dados.ultimocargo)
          }


        }
    });
  })
</script>

</body>

</html>
