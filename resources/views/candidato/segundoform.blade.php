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
      <img style="width: 100%" src="<?= url('assests/img/form/undraw_fatherhood_7i19.svg') ?>">

      </div>
      <div class="col-md-6">
        <h1>Sobre seu responsável</h1>
        <hr>
    <form method="post" action="{{route('fazer.cadastro.segundo.form')}}">
      <div class="form-group">
          {{-- nome_responsavel	telefone_responsavel	nascimento_responsavel	grau_de_parentesco --}}
          @csrf
      <label for="CPF"></label><br>
    <label class="h5">Nome completo</label>
    <input type="text" required name="nome_responsavel" class="form-control">
  </div>
  <!-- <div class="form-group">
    <label class="h5">CPF</label>
    <input type="text" name="cpfresponsavel" class="form-control" style="width: 150px">
  </div> -->

  <div class="form-group">
    <label class="h5">Data de nascimento</label>
    <input type="date" name="nascimento_responsavel" class="form-control" style="width: 180px">
  </div>

  <div class="form-group">
    <label class="h5">Telefone</label>
    <input type="text" name="telefone_responsavel" required="required" class="form-control" style="width: 130px">


  </div>
  <div class="form-group">
    <label class="h5">Grau de parentesco</label>
    <select name="grau_de_parentesco" class="form-control">
      <option disabled selected value="" >Escolha</option>
      <option value="Pai">Pai</option>
      <option value="Mãe">Mãe</option>
      <option value="Tio">Tio</option>
      <option value="Responsável Legal">Responsável Legal</option>





    </select>
  </div>

  <button class="btn btn-info" type="submit">Cadastrar dados</button> <a href="#" class="btn btn-link">Cancelar</a>
        <p>Formulário 2 de 10</p>

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
    <a href="#"> Projeto jovens integrais</a>
  </div>
  <!-- Copyright -->

</footer>
  </div>

</div>


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
.error{
  color: red
}
</style>
 <script >

            $("form").validate({
       rules :{
                cpfresponsavel:{
                required:true,
                cpfBR: true
              },
              nome_responsavel:{
                minWords: 2
              },
    nascimento_responsavel:{
      required: true,
      date: true,
      maxlength: 10
    }, telefone_responsavel:{
      required: true,
      minlength: 10
    }, grau_de_parentesco: {
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
                error.appendTo( element.parents('.c') );
            }
            else
            { // This is the default behavior
                error.insertAfter( element );
            }
         }

});





    </script>
    <script>
      $(document).ready(function(){
        $('[name=cpfresponsavel]').mask('000.000.000-00');
        $.ajax({
          url: "<?= url('cadastro/pdados') ?>",
          method: 'post',
          data: {data: 2},
          success: function(data){
            dados = JSON.parse(data)
            if (dados.cpf != null) {
              $('[name=cpfresponsavel]').val(dados.cpf)
            }
            if (dados.nome != null) {
              $('[name=nome_responsavel]').val(dados.nome)
            }
            if (dados.datanascimento != null) {
              $('[name=nascimento_responsavel]').val(dados.datanascimento)
            }
            if (dados.telefone != null) {
              $('[name=telefone_responsavel]').val(dados.telefone)
            }
            if (dados.grau_de_parentesco != null) {
              $('[name=grau_de_parentesco]').val(dados.grau_de_parentesco)
            }
          }

        })
      })
    </script>
</body>

</html>
