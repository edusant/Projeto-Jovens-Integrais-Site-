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
  <div class="tudo">
  
  <div id="topo">
      <?php $this->load->view("nav"); ?>   
   </div>

  <div class="conteudo">
     <div class="container p-5">
    <div class="row">
      <div class="col-md-6">
        <img style="width: 100%" src="<?= base_url('assests/img/form/undraw_having_fun_iais.svg') ?>">
      </div>
      <div class="col-md-6">
        <h1>Avaliação de pratica de vida integral (parte 4)</h1>
        <hr>
        
    <form method="post" id="dadosestu" action="<?= base_url('Cadastro/cadastrarinfopartedois') ?>">
      <div class="form-group">
       <label class="h5">Quais são seus hábitos de lazer? </label>
       <div class="row">
      <div class="col-md-6">
        <div class="form-check">
  <input class="form-check-input" type="checkbox" id="Assitirfilmes" name="lazer[]" value="Assitir filmes">
  <label class="form-check-label">
    Assitir filmes
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" id="Tocarinstrumentos" name="lazer[]" value="Tocar instrumentos" >
  <label class="form-check-label">
    Tocar instrumentos
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" id="Cozinhar" name="lazer[]" value="Cozinhar">
  <label class="form-check-label">
    Cozinhar
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" id="Viajar" name="lazer[]" value="Viajar">
  <label class="form-check-label">
    Viajar
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" id="Ler" name="lazer[]" value="Ler">
  <label class="form-check-label">
    Ler
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" id="Passeiosporparques" name="lazer[]" value="Passeios por parques">
  <label class="form-check-label">
    Passeios por parques
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" id="Saircomafamilia" name="lazer[]" value="Sair com a família">
  <label class="form-check-label">
    Sair com a família
  </label>
</div>

      </div>
      <div class="col-md-6">
        <div class="form-check">
  <input class="form-check-input" type="checkbox" id="Praticaesportes" name="lazer[]" value="Pratica esportes">
  <label class="form-check-label">
    Pratica esportes
  </label>
</div>
 <div class="form-check">
  <input class="form-check-input" type="checkbox" id="Saircomosamigos" name="lazer[]" value="Sair com os amigos">
  <label class="form-check-label">
    Sair com os amigos
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" id="Faztrabalhovoluntario" name="lazer[]" value="Faz trabalho voluntário">
  <label class="form-check-label">
    Faz trabalho voluntário
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" id="Assistirseries" name="lazer[]" value="Assistir series" >
  <label class="form-check-label">
    Assistir series
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" id="Navegarpelainternet" name="lazer[]" value="Navegar pela internet">
  <label class="form-check-label">
    Navegar pela internet
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" id="Outras" name="lazer[]" value="Outras">
  <label class="form-check-label">
    Outras
  </label>
</div>
      </div>
    </div>
    <div class="form-group">
       <label class="h5">Em algumas linhas elabore o que te motiva a participar do Projeto Jovens Integrais:
</label>
       <textarea class="form-control texto" required minlength="3"  name="motivoparticipacao" rows="4" cols="11">
         
       </textarea>
</div>
<div class="form-group">
       <label class="h5">Elabore em algumas linhas como você se sente em relação ao seu futuro: 
</label>
       <textarea class="form-control texto" required minlength="3" name="visaodefuturo" rows="4" cols="11">
         
       </textarea>
       </div>
        <div class="form-group">
       <label class="h5">Quais você considera serem os seus pontos fortes?</label>
       <textarea class="form-control texto" required minlength="3" name="pontosfortes" rows="4" cols="11">
         
       </textarea>
       </div>


       <div class="form-group">
       <label class="h5">Quais você considera serem os seus pontos fracos?</label>
       <textarea class="form-control texto" required minlength="3" name="pontosfracos" rows="4" cols="11">
         
       </textarea>
       </div>



<button class="btn btn-info">Cadastrar</button>
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
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="#"> Tecnojus</a>
  </div>


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

  $('form').submit(function(){
    var resultado = $('input[name="lazer[]"]:checked');
      if (resultado.length < 1) 
      {
        
        alert("Escolha o que você faz no momento de lazer")
        return false

      }
    
  })

})

      
    $("form").validate({
  rules: {
    motivoparticipacao:{
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
  $(document).ready(function(){
    // alert("Okay")
    $.ajax({
      url: "<?= base_url('cadastro/pdados') ?>",
      method: 'post',
      data: {data: 8},
      success: function(data){
        // alert(data)
        dados = JSON.parse(data)

        if (dados.motivoparticipacao != null) 
        {
          $('[name=motivoparticipacao]').val(dados.motivoparticipacao)
        }

        if (dados.visaodefuturo != null) 
        {
          $('[name=visaodefuturo]').val(dados.visaodefuturo)
        }

        if (dados.pontosfortes != null) 
        {
          $('[name=pontosfortes]').val(dados.pontosfortes)
        }

        if (dados.pontosfracos != null) 
        {
          $('[name=pontosfracos]').val(dados.pontosfracos)
        }
      }
    })

    $.ajax({
      url: "<?= base_url('cadastro/pdados') ?>",
      method: 'post',
      data: {data: 81},
      success: function(data){
        // alert(data)
        lazer = JSON.parse(data)
        for (i in lazer) {
          // alert(lazer[i].nome)
          if (lazer[i].nome == "Assitir filmes") 
          {
            $('#Assitirfilmes').prop('checked', true)
          }
          else if (lazer[i].nome == "Tocar instrumentos") 
          {
            $('#Tocarinstrumentos').prop('checked', true)
          }
          else if (lazer[i].nome == "Cozinhar") 
          {
            $('#Cozinhar').prop('checked', true)
          }
          else if (lazer[i].nome == "Viajar") 
          {
            $('#Viajar').prop('checked', true)
          }
          else if (lazer[i].nome == "Ler") 
          {
            $('#Ler').prop('checked', true)
          }
          else if (lazer[i].nome == "Passeios por parques") 
          {
            $('#Passeiosporparques').prop('checked', true)
          }
          else if (lazer[i].nome == "Sair com a família") 
          {
            $('#Saircomafamilia').prop('checked', true)
          }
          else if (lazer[i].nome == "Sair com os amigos") 
          {
            $('#Saircomosamigos').prop('checked', true)
          }
          else if (lazer[i].nome == "Faz trabalho voluntário") 
          {
            $('#Faztrabalhovoluntario').prop('checked', true)
          }
          else if (lazer[i].nome == "Pratica esportes") 
          {
            $('#Praticaesportes').prop('checked', true)
          }
          else if (lazer[i].nome == "Assistir series") 
          {
            $('#Assistirseries').prop('checked', true)
          }
          else if (lazer[i].nome == "Navegar pela internet") 
          {
            $('#Navegarpelainternet').prop('checked', true)
          }
          else if (lazer[i].nome == "Outras") 
          {
            $('#Outras').prop('checked', true)
          }
        }
      }
    })
  })
</script>
</body>

</html>



