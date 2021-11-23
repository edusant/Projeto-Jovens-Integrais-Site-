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
        <img style="width: 100%" src="<?= url('assests/img/form/undraw_buddies_tb1l.svg') ?>">

      </div>
      <div class="col-md-6">
        <h2>Sobre seu entorno</h2>
        <hr>

    <form method="post" id="dadosestu" action="<?= url('Cadastro/cadastroDeApoio') ?>">
      <div class="form-group">

      <div class="form-group">
       <label class="h5">Em caso de necessidade, com quem você pode contar? </label>
          <div class="row">
      <div class="col-md-6">
        <div class="form-check">
  <input class="form-check-input" id="Conjuge" type="checkbox" name="apoio[]" value="Cônjuge">
  <label class="form-check-label">
    Cônjuge
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" id="Amigos" type="checkbox" name="apoio[]" value="Amigos" >
  <label class="form-check-label">
    Amigos
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" id="Professores" type="checkbox" name="apoio[]" value="Professores">
  <label class="form-check-label">
    Seus Professores
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" id="Membrosdeigreja" type="checkbox" name="apoio[]" value="Membros de igreja">
  <label class="form-check-label">
    Membros de igreja
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" id="Colegasdetrabalho" type="checkbox" name="apoio[]" value="Colegas de trabalho">
  <label class="form-check-label">
    Colegas de trabalho
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" id="Vizinhos" type="checkbox" name="apoio[]" value="Vizinhos">
  <label class="form-check-label">
    Vizinhos
  </label>
</div>

      </div>
      <div class="col-md-6">
        <div class="form-check">
  <input class="form-check-input" id="Colegasdefaculdade" type="checkbox" name="apoio[]" value="Colegas da faculdade(escola)">
  <label class="form-check-label">
    Colegas da faculdade(escola)
  </label>
</div>
 <div class="form-check">
  <input class="form-check-input" id="Projetossociais" type="checkbox" name="apoio[]" value="Projetos sociais">
  <label class="form-check-label">
    Projetos sociais
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" id="Seuspais" type="checkbox" name="apoio[]" value="Seus pais">
  <label class="form-check-label">
    Seus pais
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" id="Suafamilia" type="checkbox" name="apoio[]" value="Sua familia (tios, primos, avós)" >
  <label class="form-check-label">
    Sua familia (tios, primos, avós)
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" id="Familiadasuaconjuge" type="checkbox" name="apoio[]" value="Família da sua cônjuge">
  <label class="form-check-label">
    Família da sua cônjuge
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" id="Outras" type="checkbox" name="apoio[]" value="Outras">
  <label class="form-check-label">
    Outras
  </label>
</div>
      </div>
    </div>



     <div class="form-group">
       <label class="h5">O que você mudaria na sua comunidade (escola, bairro, rua), qual seria seu papel nessa mudança </label>
       <textarea class="form-control" name="confianca" rows="4" cols="11">

        </textarea>

     </div>

     <hr>

     <div class="form-group">
     <!-- <label class="h5">Primera situação de mudança</label> -->

     <!-- <label class="h5">Escreva sobre as historias de mudança mais importantes e o que elas causaram na sua vida</label>
     <textarea class="form-control texto" required name="mudancas" rows="7" cols="8">

     </textarea> -->
     </div>



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
        data: {data: 7},
        success: function(data){
          // alert(data);
          dados = JSON.parse(data)
          if (dados.confianca !== null) {
            $('[name=confianca]').val(dados.confianca)
          }
          if (dados.mudancas !== null) {
            $('[name=mudancas]').val(dados.mudancas)
          }

        }
      })

  $.ajax({
      url: "<?= url('cadastro/pdados') ?>",
      method: 'post',
      data: {data: 101},
      success: function(data){
        // alert(data)
        dados = JSON.parse(data)
        for(x in dados){
        // alert(dados[x].nome)

        if(dados[x].nome == "Cônjuge"){
          $('#Conjuge').prop('checked', true)
        }
        else if(dados[x].nome == "Amigos"){
          $('#Amigos').prop('checked', true)
        }
        else if(dados[x].nome == "Professores"){
          $('#Professores').prop('checked', true)
        }
        else if(dados[x].nome == "Membros de igreja"){
          $('#Membrosdeigreja').prop('checked', true)
        }
        else if(dados[x].nome == "Colegas de trabalho"){
          $('#Colegasdetrabalho').prop('checked', true)
        }
        else if(dados[x].nome == "Vizinhos"){
          $('#Vizinhos').prop('checked', true)
        }
        else if(dados[x].nome == "Colegas da faculdade(escola)"){
          $('#Colegasdefaculdade').prop('checked', true)
        }
        else if(dados[x].nome == "Projetos sociais"){
          $('#Projetossociais').prop('checked', true)
        }
        else if(dados[x].nome == "Seus pais"){
          $('#Seuspais').prop('checked', true)
        }
        else if(dados[x].nome == "Sua familia (tios, primos, avós)"){
          $('#Suafamilia').prop('checked', true)
        }
        else if(dados[x].nome == "Família da sua cônjuge"){
          $('#Familiadasuaconjuge').prop('checked', true)
        }
        else if(dados[x].nome == "Outras"){
          $('#Outras').prop('checked', true)
        }

      }
      }
    })

   })
</script>

</body>

</html>
