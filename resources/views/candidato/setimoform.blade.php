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
      <?php //$this->load->view("nav"); ?>
   </div>
  <div class="conteudo">
     <div class="container p-5">
    <div class="row">
      <div class="col-md-6">
        <img style="width: 100%" src="<?= url('assests/img/form/undraw_Meditation_o89g.svg') ?>">
      </div>
      <div class="col-md-6">
        <h1>Avaliação de pratica de vida integral (parte 3)</h1>
        <hr>
    <form method="post" id="dadosestu" action="<?= url('Cadastro/infocompleparteum') ?>">
      <div class="form-group">
        <fieldset>
<style type="text/css">
  .error{
    color: red
  }
</style>
<div class="form-group">
    <label class="h5">Você ler com frequência?</label>
     <p class='z'>
      <input type="radio" id="leitura" value="sim" name="gosta">Sim<br>
      <input type="radio" id="leituranao" value="não" name="gosta">Não<br>
    </p>
    </div>
    <div class="form-group sumir" id="leiturasim">
        <label class="h5">Você ler com qual frequência</label>
        <select name="frequencia" required class="form-control">
          <option selected disabled>Escolha</option>
          <option value="sempre">Alta</option>
          <option value="moderada">Média</option>
          <option value="pouco">Baixa</option>
        </select>
      <div>
        <br>
      <label for="" class="h5">Escolha o seus temas de leitura</label>
          <div class="row">
      <div class="col-md-6">
        <div class="form-check">
  <input class="form-check-input" type="checkbox" id="Romances" name="temasleitura[]" value="Romances">
  <label class="form-check-label">
    Romances
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" id="Administracao" name="temasleitura[]" value="Administração, Negócios e Economia" >
  <label class="form-check-label">
    Administração, Negócios, Economia
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" id="Autoajuda" name="temasleitura[]" value="Autoajuda">
  <label class="form-check-label">
    Autoajuda
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" id="Ciencias" name="temasleitura[]" value="Ciências">
  <label class="form-check-label">
    Ciências
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" id="Computacao" name="temasleitura[]" value="Computação, Informática e Mídias Digitais">
  <label class="form-check-label">
    Computação, Informática, Mídias Digitais
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" id="HQs" name="temasleitura[]" value="HQs, Mangás e Graphic Novels">
  <label class="form-check-label">
    HQs, Mangás, Graphic Novels
  </label>
</div>
      </div>
      <div class="col-md-6">
        <div class="form-check">
  <input class="form-check-input" type="checkbox" id="Literatura" name="temasleitura[]" value="Literatura e Ficção">
  <label class="form-check-label">
    Literatura e Ficção
  </label>
</div>
 <div class="form-check">
  <input class="form-check-input" type="checkbox" id="Politica" name="temasleitura[]" value="Política, Filosofia e Ciências Sociais">
  <label class="form-check-label">
    Política, Filosofia, Ciências Sociais
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" id="Religiao" name="temasleitura[]" value="Religião, Espiritualidade">
  <label class="form-check-label">
    Religião, Espiritualidade
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" id="Historia" name="temasleitura[]" value="História" >
  <label class="form-check-label">
    História
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" id="Biografias" name="temasleitura[]" value="Biografias e Histórias Reais">
  <label class="form-check-label">
    Biografias e Histórias Reais
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" id="Outras" name="temasleitura[]" value="Outras">
  <label class="form-check-label">
    Outras
  </label>
</div>
      </div>
    </div>
      </div>
  </div>
  <div class="form-group">
    <label class="h5">Já participou de algum projeto social ou vivência de autoconhecimento? </label>

     <p class='z'>
      <input type="radio" id="projeto" value="sim" name="projeto">Sim<br>
      <input type="radio" id="projetonao" value="não" name="projeto">Não<br>
    </p>

    <div class="form-group sumir" id="projetosim">
    <label class="h5">Escreva sobre os projetos que você já participou</label>

    <textarea minlength="3" pattern="[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ, ]+$"  name="projetotext" required id="projetosocial" class="form-control texto">

    </textarea>
    </div>
</div>
<div class="form-group">
    <label class="h5">Já passou por mudanças significativas em sua vida?</label>

     <p class='z'>
      <input type="radio" id="mundancas" value="sim" name="mundancas">Sim<br>
      <input type="radio" id="mundancasnao" value="não" name="mundancas">Não<br>
    </p>

    <div class="form-group sumir" id="mundancassim">
    <label class="h5">Escreva sobre as mudanças e como você lidou com elas</label>
    <textarea minlength="3" pattern="[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ, ]+$"  name="mundancastext" id="mundancastext" class="form-control texto">

    </textarea>
    </div>
  </div>

<div class="form-group">
   <label class="h5">Como costuma reagir as mudanças? </label>
    <textarea class="form-control texto"  name="reagirmudancas" >

    </textarea>

   </div>



     <div class="form-group">
     <label class="h5">Realiza alguma prática, como meditação, exercícios de respiração, técnicas de relaxamento, visualizações</label>
     <p class='z'>
      <input type="radio" id="meditacao" value="sim" name="meditacao">Sim<br>
      <input type="radio" id="meditacaonao" value="não" name="meditacao">Não<br>
    </p>
    </div>


      <div class="form-group sumir" id="meditacaosim">
      <label for="" class="h5">Descrevas as meditações que você pratica</label>
      <textarea rows="5" name="meditacaotext" minlength="3"  cols="11" class="form-control texto">

      </textarea>
      </div>
      <button class="btn btn-info">Cadastrar dados</button> <a href="#" class="btn btn-link">Cancelar</a>

  </div>

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
  $("#leitura").click(function(){
    $('#leiturasim').show()
  });

  $('#leituranao').click(function(){
    $('#leiturasim').hide()
  })

  $('#projeto').click(function(){
    $('#projetosim').show()
  })

  $('#projetonao').click(function(){
   $('#projetosim').hide()
  })

  $('#mundancas').click(function(){
    $('#mundancassim').show()
  })

  $('#mundancasnao').click(function(){
   $('#mundancassim').hide()
  })

  $('#meditacao').click(function(){
    $('#meditacaosim').show()
  })

  $('#meditacaonao').click(function(){
    $('#meditacaosim').hide()
  })
})
    $("#dadosestu").validate({
  rules: {
    gosta:{
      required: true
    },
    projeto:{
      required: true
    },
    mundancas:{
      required: true
    },
    reagirmudancas:{
      required: true,
      minlength: 5
    },
    meditacao:{
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
        $('.texto').val('')
        $('form').submit(function(){
    var resultado = $('input[name="temasleitura[]"]:checked');
    // alert(resultado.length)
    if ($("input[name='gosta']:checked").val() == 'sim') {
      if (resultado.length < 1)
      {
        alert("Escolha seus temas de leitura")
        return false
      }
    }
        })
        $.ajax({
          url: "<?= url('cadastro/pdados') ?>",
          method: 'post',
          data: {data: 7},
          success: function(data){
            dados = JSON.parse(data)
            // alert(data)
            if (dados.gostadeler == "sim") {
              $('#leitura').prop('checked', true)
              $('#leiturasim').show()
              $('[name=frequencia]').val(dados.frequencialeitura)
              $.ajax({
               url: "<?= url('cadastro/pdados') ?>",
              method: 'post',
              data: {data: 71},
              success: function(data)
              {
                d = JSON.parse(data)
                for (i in d) {
                  if (d[i].nome == 'Romances')
                  {
                    $('#Romances').prop('checked', true)
                  }
                  if (d[i].nome == "Administração, Negócios e Economia")
                  {
                    $('#Administracao').prop("checked", true)
                  }
                  if (d[i].nome == "Autoajuda")
                  {
                    $('#Autoajuda').prop("checked", true)
                  }
                  if (d[i].nome == "Ciências")
                  {
                    $('#Ciencias').prop('checked', true)
                  }
                  if (d[i].nome == "Computação, Informática e Mídias Digitais")
                  {
                    $('#Computacao').prop('checked', true)
                  }
                  if (d[i].nome == "Literatura e Ficção")
                  {
                    $('#Literatura').prop('checked', true)
                  }
                  if (d[i].nome == "HQs, Mangás e Graphic Novels")
                  {
                    $('#HQs').prop('checked', true)
                  }
                  if (d[i].nome == "Política, Filosofia e Ciências Sociais")
                  {
                    $('#Politica').prop('checked', true)
                  }
                  if (d[i].nome == "Religião, Espiritualidade")
                  {
                    $('#Religiao').prop('checked', true)
                  }
                  if (d[i].nome == "História")
                  {
                    $('#Historia').prop('checked', true)
                  }
                  if (d[i].nome == "Biografias e Histórias Reais")
                  {
                    $('#Biografias').prop('checked', true)
                  }
                  if (d[i].nome == "Outras")
                  {
                    $('#Outras').prop('checked', true)
                  }
                }
              }
              })
            }
            else if (dados.gostadeler == "não"){
              $('#leituranao').prop('checked', true)
            }

            if (dados.participouprojeto == "sim")
            {
              $('#projeto').prop('checked', true)
              $('#projetosim').show()
              $('#projetosocial').val(dados.projetotext)
            }
            else if (dados.participouprojeto == "não")
            {
              $('#projetonao').prop('checked', true)
            }

            if (dados.passoumudancas == "sim")
            {
              $('#mundancas').prop('checked', true)
              $('#mundancassim').show()
              $('#mundancastext').val(dados.mundancastext)
            }
            else if (dados.passoumudancas == "não")
            {
              $('#mundancasnao').prop('checked', true)
            }
            if (dados.reagirmudancas != null)
            {
              $('[name=reagirmudancas]').val(dados.reagirmudancas)
            }
            if (dados.fazmeditacao == "sim")
            {
              $('#meditacao').prop('checked', true)
              $('#meditacaosim').show()
              $('[name=meditacaotext]').val(dados.meditacaotext)
            }
            else if (dados.fazmeditacao == "não")
            {
              $('#meditacaonao').prop('checked', true)
            }


          }

        })
      })
    </script>


</body>

</html>



