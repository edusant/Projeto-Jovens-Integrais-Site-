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
      <div class="col-md-6 p-4">
        <img style="width: 100%" src="<?= url('assests/img/form/undraw_personal_data_29co.svg') ?>">
      </div>
      <div class="col-md-6 p-4">
        <form action="<?= route('cadastro.primeiro.form') ?>" method="post">
                  <h1>Sobre você!</h1>
<hr>

  <div class="form-group">
  <label for="tags" class="h5">Nacionalidade</label>
  <input id="tags" name="nacionalidade"  class="form-control">
</div>

    <div class="form-group ajustando">
      <div class="form-group">

<label for="estadoc" class="h5">Estado civil</label><br>
<select id="estadoc" class="form-control col-5"  name="estado_civil" title="Escolha um estado civil">
  <option value="" disabled selected>Escolha</option>
  <option value="Casado">Casado</option>
  <option value="Solteiro">Solteiro</option>
  <option value="Divorciado">Divorciado</option>
  <option value="Viuvo">Viuvo</option>

</select><br>
    <div class="form-group">
      <label for="telefone" class="h5">Telefone</label><br>
      <input name="telefone" type="text" class="form-control" id="telefone"  size="13" maxlength="14"/>
    </div>
    </div>
@csrf


      <button class="btn btn-info mb-3" type="submit">Salvar e continuar</button>





      <p style="margin-top: 30px">Formulário 1 de 10</p>

</form>
      </div>
      <br><br>
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

    $( function() {
    $( "input" ).checkboxradio({
      icon: false
    });
  } );



  $( function() {
    var availableTags = [
      "Brasileira",
      "Alemã",
      "Indiana",
      "Escocêsa",
      "Americana",
      "Canadense",
      "Japopoêsa",
      "Angolana",
      "Inglêsa",
      "Irlandesa",
      "Tailandesa",
      "Chinesa",
      "Portuguesa",
      "Argentina",
      "Colombiana",
      "Chilena",
      "Equatoriana",
      "Mexicana"
    ];
    $( "#tags" ).autocomplete({
      source: availableTags
    });
  } );






  </script>

        <script >

            $("form").validate({
       rules : {


              multavalor:{ required:true }
             ,
             nacionalidade:{
                    required:true
             },
             rg:{
                required:true,
                minlength:9,
                maxlength: 9

             },
             estadoc: {
              required: true
             },
             rgd:{
                required:true
             },
             telefone:{
                minlength: 9,
                required:true
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
                error.appendTo( element.parents('.c') );
            }
            else
            { // This is the default behavior
                error.insertAfter( element );
            }
         }

});





    </script>
    <style type="text/css">
  .error{
    color: red
  }
  #rg{
    width: 116px
  }
  #cpf {
    width: 130px
  }
  #estadoc{
    width: 150px
  }
  #data{
   width:  190px
  }
  #telefone{
    width: 125px
  }
</style>
<script>

  $(document).ready(function(){
    $.ajax({
          url: "<?= url('cadastro/pdados') ?>",
          method: 'post',
          data: {data: 1},
            success: function(data)
            {
              // alert(data)
              dados = JSON.parse(data)
              if (dados.nacinalidade != null)
              {
                $('#tags').val(dados.nacinalidade)
              }
              if (dados.estadocivil != null)
              {
                $('#estadoc').val(dados.estadocivil)
              }
              if (dados.telefone != null)
              {
                $('#telefone').val(dados.telefone)
              }
            }
    });
  })

</script>
</body>

</html>
