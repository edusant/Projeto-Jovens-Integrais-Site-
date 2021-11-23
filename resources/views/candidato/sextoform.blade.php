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
        <img style="width: 100%" src="<?= url('assests/img/form/undraw_medicine_b1ol.svg') ?>">
      </div>
      <div class="col-md-6">
        <h1>Avaliação de pratica de vida integral (parte 2)</h1>
        <hr>
    <form method="post" id="dadosestu" action="<?= url('Cadastro/cadastrohistorias') ?>">
      <div class="form-group">
        <fieldset>
<style type="text/css">
  .error{
    color: red
  }
</style>

    <legend class="h5">Pratica atividades física</legend>

     <p class='z'>
      <input type="radio" id="atifis" value="sim" name="atf">Sim<br>
      <input type="radio" id="ativif" value="não" name="atf">Não<br>
    </p>

    <div class="form-group sumir" id="atividadesficas">
    <label class="h5">Selecione as atividades que você pratica</label>
    <div class="row">
      <div class="col-md-6">
        <div class="form-check">
  <input class="form-check-input" id="Futebol" type="checkbox" name="ativifisica[]" value="Futebol">
  <label class="form-check-label">
    Futebol
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" id="Volei" type="checkbox" name="ativifisica[]" value="Vôlei">
  <label class="form-check-label">
    Vôlei
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" id="Natacao" type="checkbox" name="ativifisica[]" value="Natação">
  <label class="form-check-label">
    Natação
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" id="Corrida" type="checkbox" name="ativifisica[]" value="Corrida">
  <label class="form-check-label">
    Corrida
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" id="Caminhada" type="checkbox" name="ativifisica[]" value="Caminhada">
  <label class="form-check-label">
    Caminhada
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" id="Skate" type="checkbox" name="ativifisica[]" value="Skate">
  <label class="form-check-label">
     Skate
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" id="tenisdemesa" type="checkbox" name="ativifisica[]" value="tênis de mesa">
  <label class="form-check-label">
     Tênis de mesa
  </label>
</div>


      </div>
      <div class="col-md-6">
        <div class="form-check">
  <input class="form-check-input" id="Xadrez" type="checkbox" name="ativifisica[]" value="Xadrez">
  <label class="form-check-label">
    Xadrez
  </label>
</div>
 <div class="form-check">
  <input class="form-check-input" id="Futsal" type="checkbox" name="ativifisica[]" value="FUTSAL" >
  <label class="form-check-label">
    Futsal
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" id="Atletismo" type="checkbox" name="ativifisica[]" value="Atletismo">
  <label class="form-check-label">
    Atletismo
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" id="Surfe" type="checkbox" name="ativifisica[]" value="Surfe">
  <label class="form-check-label">
     Surfe
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" id="Judo" type="checkbox" name="ativifisica[]" value="Judô">
  <label class="form-check-label">
     Judô
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" id="Capoeira" type="checkbox" name="ativifisica[]" value="Capoeira">
  <label class="form-check-label">
     <!-- CAPOEIRA -->
     Capoeira
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" id="Outrasati" type="checkbox" name="ativifisica[]" value="Outras">
  <label class="form-check-label">
     Outras
  </label>
</div>
      </div>
    </div>
  </div>
    <label class="h5">Tem algum vício? </label>

     <p class='z'>
      <input type="radio" id="vicio" value="sim" name="vicio">Sim<br>
      <input type="radio" id="vicionao" value="não" name="vicio">Não<br>
    </p>

    <div class="form-group sumir" id="viciosim">
    <label class="h5">Selecione quais são os seus vicios</label><br>
    <div class="row">
      <div class="col-md-6">
        <div class="form-check">
  <input class="form-check-input" id="tabaco" type="checkbox" name="vicios[]" value="tabaco">
  <label class="form-check-label">
    Tabaco
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" id="Alcool" type="checkbox" name="vicios[]" value="Alcool" >
  <label class="form-check-label">
    Alcool
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" id="maconha" type="checkbox" name="vicios[]" value="maconha">
  <label class="form-check-label">
    Maconha
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" id="Analgesicos" type="checkbox" name="vicios[]" value="Analgésicos">
  <label class="form-check-label">
    Analgésicos
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" id="Cocaina" type="checkbox" name="vicios[]" value="Cocaína">
  <label class="form-check-label">
    Cocaína
  </label>
</div>

      </div>
      <div class="col-md-6">
        <div class="form-check">
  <input class="form-check-input" id="Benzodiazepinicos" type="checkbox" name="vicios[]" value="Benzodiazepínicos">
  <label class="form-check-label">
    Benzodiazepínicos
  </label>
</div>
 <div class="form-check">
  <input class="form-check-input" id="Estimulantes" type="checkbox" name="vicios[]" value="Estimulantes">
  <label class="form-check-label">
    Estimulantes
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" id="Inalantes" type="checkbox" name="vicios[]" value="Inalantes">
  <label class="form-check-label">
    Inalantes
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" id="Sedativos" type="checkbox" name="vicios[]" value="Sedativos (barbitúricos)" >
  <label class="form-check-label">
    Sedativos (barbitúricos)
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" id="jogos" type="checkbox" name="vicios[]" value="jogos">
  <label class="form-check-label">
    Jogos
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" id="Outrosvic" type="checkbox" name="vicios[]" value="Outros">
  <label class="form-check-label">
    Outros
  </label>
</div>
      </div>
    </div>
    </div>
    <label class="h5">Tem algum problema de saúde atual ou preexistente?  </label>
     <p class='z'>
      <input type="radio" id="problemasaude" value="sim" name="problemasaude">Sim<br>
      <input type="radio" id="problemasaudenao" value="não" name="problemasaude">Não<br>
    </p>
    <div class="form-group sumir" id="problemasaudesim">
    <label class="h5">Selecione os seus problemas de saúde</label>
     <div class="row">
      <div class="col-md-6">
        <div class="form-check">
  <input class="form-check-input" id="papiloma" type="checkbox" name="saude[]" value="Papilomavírus Humano">
  <label class="form-check-label">
    Papilomavírus Humano(HPV)
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" id="Hepatites" type="checkbox" name="saude[]" value="Hepatites A e B" >
  <label class="form-check-label">
    Hepatites A e B
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" id="Coqueluche" type="checkbox" name="saude[]" value="Coqueluche">
  <label class="form-check-label">
    Coqueluche
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" id="Depressao" type="checkbox" name="saude[]" value="Depressão">
  <label class="form-check-label">
    Depressão
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" id="Obesidade" type="checkbox" name="saude[]" value="Obesidade">
  <label class="form-check-label">
    Obesidade
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" id="Ansiedade" type="checkbox" name="saude[]" value="Ansiedade">
  <label class="form-check-label">
    Ansiedade
  </label>
</div>

      </div>
      <div class="col-md-6">
        <div class="form-check">
  <input class="form-check-input" id="Hipertensao" type="checkbox" name="saude[]" value="Hipertensão arterial">
  <label class="form-check-label">
    Hipertensão arterial
  </label>
</div>
 <div class="form-check">
  <input class="form-check-input" id="Diabetes" type="checkbox" name="saude[]" value="Diabetes">
  <label class="form-check-label">
    Diabetes
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" id="Asma" type="checkbox" name="saude[]" value="Asma" >
  <label class="form-check-label">
    Asma
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" id="AIDS" type="checkbox" name="saude[]" value="AIDS">
  <label class="form-check-label">
    AIDS
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" id="Outrasdoe" type="checkbox" name="saude[]" value="Outras">
  <label class="form-check-label">
    Outras
  </label>
</div>
      </div>
    </div>
    </div>


   <label class="h5">Toma alguma medicação? </label>

     <p class='z'>
      <input type="radio" id="medicacao" value="sim" name="medicacao">Sim<br>
      <input type="radio" id="medicacaonao" value="não" name="medicacao">Não<br>
    </p>

    <div class="form-group sumir" id="medicacaosim">
    <label class="h5">Escreva sobre suas medicações</label>
    <textarea type="text" minlength="3" rows="4" cols="10" maxlength="1000"   name="medicacaotext" required minlength="3" class="form-control">
    </textarea>
    </div>

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
  $('form').submit(function(){
    var resultado = $('input[name="ativifisica[]"]:checked');
    // alert(resultado.length)
    if ($("input[name='atf']:checked").val() == 'sim') {
      if (resultado.length < 1)
      {

        alert("Escolha as suas atividades físicas")
        return false

      }
    }


    var resultadovicio = $('input[name="vicios[]"]:checked');
    // alert(resultado.length)
    if ($("input[name='vicio']:checked").val() == 'sim') {
      if (resultadovicio.length < 1)
      {

        alert("Marque os seus vicios")
        return false

      }
    }


    var resultadosaude = $('input[name="saude[]"]:checked');
    if ($("input[name='problemasaude']:checked").val() == 'sim') {
      if (resultadosaude.length < 1)
      {

        alert("Marque os seus vicios")
        return false

      }
    }





  })
  $("#atifis").click(function(){
    $('#atividadesficas').show()
  });

  $('#ativif').click(function(){
    $('#atividadesficas').hide()
  })
  $('#vicio').click(function(){
    $('#viciosim').show()
  })
  $('#vicionao').click(function(){
   $('#viciosim').hide()
  })
  $('#problemasaude').click(function(){
    $('#problemasaudesim').show()
  })
  $('#problemasaudenao').click(function(){
   $('#problemasaudesim').hide()
  })
  $('#medicacao').click(function(){
    $('#medicacaosim').show()
  })
  $('#medicacaonao').click(function(){
    $('#medicacaosim').hide()
  })


})


    $("#dadosestu").validate({
  rules: {
    estuda:{
      required: true
    },
    atf:{
      required: true
    },
    vicio:{
      required: true
    },
    problemasaude:{
      required: true
    },
    medicacao:{
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
  input[type="checkbox"]::before {
  /*content: " ";*/
  padding: 10px;
  background-color: gray
  width: inherit;
  height: inherit;
  position: absolute;
  background-color: #fff;
  border: 1px solid #bf360c;
}
input[type="checkbox"]:checked::after {
  content: " ";
  width: 0.2rem;
  height: 0.5rem;
  margin-left: 0.3rem;
  border-color: #bf360c;
  border-style: solid;
  border-width: 0 3px 3px 0;
  position: absolute;
  transform: rotate(45deg);
}

.difr{
  padding: 10px;
  margin: 10px
  background-color: green
}

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
    $.ajax
    ({
      url: "<?= url('cadastro/pdados') ?>",
      method: 'post',
      data: {data: 6},
      success: function(data)
        {
          dados = JSON.parse(data);
          if (dados.medicacao == 'sim')
          {
            $('#medicacao').prop('checked' , true);
            $('#medicacaosim').show()
            if(dados.medicacaotext != null)
            {
              $('[name=medicacaotext]').val(dados.medicacaotext)
            }
          }
          else if(dados.medicacao == 'não')
          {
           $('#medicacaonao').prop('checked' , true);
           $('#medicacaosim').hide()
          }

          if (dados.atividadefisica == 'sim')
          {
            $('#atifis').prop('checked', true)
            $('#atividadesficas').show()
            $.ajax({
              url: "<?= url('cadastro/pdados') ?>",
              method: 'post',
              data: {data: 61},
              success: function(data){
                dadosatividade = JSON.parse(data)
                for (x in dadosatividade) {
                if (dadosatividade[x].nome == "Futebol")
                {
                  $('#Futebol').prop('checked' , true);
                }
                else if(dadosatividade[x].nome == "Natação"){
                  $('#Natacao').prop('checked' , true);
                }
                else if(dadosatividade[x].nome == "Vôlei"){
                  $('#Volei').prop('checked' , true);
                }
                else if(dadosatividade[x].nome == "Corrida"){
                  $('#Corrida').prop('checked' , true);
                }
                else if(dadosatividade[x].nome == "Caminhada"){
                  $('#Caminhada').prop('checked' , true);
                }
                else if(dadosatividade[x].nome == "Skate"){
                  $('#Skate').prop('checked' , true);
                }
                else if(dadosatividade[x].nome == "tênis de mesa"){
                  $('#tenisdemesa').prop('checked' , true);
                }
                else if(dadosatividade[x].nome == "Xadrez"){
                  $('#Xadrez').prop('checked' , true);
                }
                else if(dadosatividade[x].nome == "FUTSAL"){
                  $('#Futsal').prop('checked' , true);
                }
                else if(dadosatividade[x].nome == "Atletismo"){
                  $('#Atletismo').prop('checked' , true);
                }
                else if(dadosatividade[x].nome == "Surfe"){
                  $('#Surfe').prop('checked' , true);
                }
                else if(dadosatividade[x].nome == "Judô"){
                  $('#Judo').prop('checked' , true);
                }
                else if(dadosatividade[x].nome == "Capoeira"){
                  $('#Capoeira').prop('checked' , true);
                }
                else if(dadosatividade[x].nome == "Outras"){
                  $('#Outrasati').prop('checked' , true);
                }
                }
              }
            })
          }
          else if(dados.atividadefisica = 'não')
          {
            // ativif
            $('#ativif').prop('checked', true)
          }




          if (dados.vicio == 'sim')
          {
            $('#vicio').prop('checked', true)
            $('#viciosim').show()
            $.ajax({
              url: "<?= url('cadastro/pdados') ?>",
              method: 'post',
              data: {data: 62},
              success: function(dat){
                dadosvicios = JSON.parse(dat)
                for (x in dadosvicios) {
                if (dadosvicios[x].nome == "tabaco")
                {
                  $('#tabaco').prop('checked' , true);
                }
                else if(dadosvicios[x].nome == "Alcool"){
                  $('#Alcool').prop('checked', true)
                }
                else if(dadosvicios[x].nome == "maconha"){
                  $('#maconha').prop('checked', true)
                }
                else if(dadosvicios[x].nome == "Analgésicos"){
                  $('#Analgesicos').prop('checked', true)
                }
                else if(dadosvicios[x].nome == "Cocaína"){
                  $('#Cocaina').prop('checked', true)
                }
                else if(dadosvicios[x].nome == "Benzodiazepínicos"){
                  $('#Benzodiazepinicos').prop('checked', true)
                }
                else if(dadosvicios[x].nome == "Estimulantes"){
                  $('#Estimulantes').prop('checked', true)
                }
                else if(dadosvicios[x].nome == "Inalantes"){
                  $('#Inalantes').prop('checked', true)
                }
                else if(dadosvicios[x].nome == "Sedativos (barbitúricos)"){
                  $('#Sedativos').prop('checked', true)
                }
                else if(dadosvicios[x].nome == "jogos"){
                  $('#jogos').prop('checked', true)
                }
                else if(dadosvicios[x].nome == "Outros"){
                  $('#Outrosvic').prop('checked', true)
                }
                }
              }
            })
          }
          else if(dados.vicio == 'não')
          {
            $('#vicionao').prop('checked', true)
          }

           if (dados.problemadesaude == 'sim')
          {
            $('#problemasaude').prop('checked', true)
            $('#problemasaudesim').show()
            $.ajax({
              url: "<?= url('cadastro/pdados') ?>",
              method: 'post',
              data: {data: 63},
              success: function(d){
              dadosdoencas = JSON.parse(d)
              for (x in dadosdoencas) {
              if (dadosdoencas[x].nome == "Papilomavírus Humano")
              {
                  $('#papiloma').prop('checked' , true);
              }
              else if (dadosdoencas[x].nome == "Hepatites A e B")
              {
                  $('#Hepatites').prop('checked' , true);
              }
              else if (dadosdoencas[x].nome == "Coqueluche")
              {
                  $('#Coqueluche').prop('checked' , true);
              }
              else if (dadosdoencas[x].nome == "Depressão")
              {
                  $('#Depressao').prop('checked' , true);
              }
              else if (dadosdoencas[x].nome == "Obesidade")
              {
                  $('#Obesidade').prop('checked' , true);
              }
              else if (dadosdoencas[x].nome == "Ansiedade")
              {
                  $('#Ansiedade').prop('checked' , true);
              }
              else if (dadosdoencas[x].nome == "Hipertensão arterial")
              {
                  $('#Hipertensao').prop('checked' , true);
              }
              else if (dadosdoencas[x].nome == "Diabetes")
              {
                  $('#Diabetes').prop('checked' , true);
              }
              else if (dadosdoencas[x].nome == "Asma")
              {
                $('#Asma').prop('checked' , true);
              }
              else if (dadosdoencas[x].nome == "Outras")
              {
                $('#Outrasdoe').prop('checked' , true);
              }
              else if (dadosdoencas[x].nome == "AIDS")
              {
                $('#AIDS').prop('checked' , true);
              }
              }
              }
            })
          }
          else if(dados.problemadesaude){
            $('#problemasaudenao').prop('checked', true)
          }
        }
    })
  })
</script>
</body>

</html>



