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

    <!-- Fim do menu -->
   </div>
  <div class="conteudo">
     <div class="container">
    <div class="row p-5">
      <div class="col-md-6">
        <img style="width: 100%" src="<?= url('assests/img/form/undraw_location_tracking_46qb.svg') ?>">
      </div>
      <div class="col-md-6">
        <h2>Endereço</h2>
        <hr>
        <form  action="<?= route('candidato.cadastro.quarto.form')?>" id="formendereco" method="post">
            @csrf
        <label>Cep: (Busque seu endereço pelo CEP)
        <input name="cep" type="text" id="cep" class="form-control" value="" size="10" maxlength="9"
               onblur="pesquisacep(this.value);" /></label><br />
        <label width="100%">Rua:</label><br />
        <input type="hidden" name="f" value="4">
        <input name="rua" type="text" id="rua" class="form-control"  />
        <label>Número:</label><br />
        <input name="num" type="text" id="num" class="form-control" size="8" maxlength="5" />
        <label>Bairro:</label><br />
        <input name="bairro" type="text" id="bairro" class="form-control" />
        <label>Cidade:</label><br />
        <input name="cidade" type="text" id="cidade" class="form-control" />
        <label>Estado (UF):</label><br />
        <input name="uf" type="text" id="uf" class="form-control" size="2" /><br/>
        <button class="btn btn-info ">Cadastar</button> <a href="#" class="btn btn-link">Voltar</a>
      </form>
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
  <script type="text/javascript">
       $("#formendereco").validate({
       rules : {
             cep:{
                    required:true,
                    postalcodeBR: true
             },
             rua:{
                required: true,
                minlength: 3
             },
             num:{
                required: true,
                digits: true,
                min: 1
             },
             bairro:{
                required:true,
                minlength: 3
             },
             cidade:{
                required:true,
                minlength: 3
             },
             uf:{
                required: true,
                minlength: 2

             }
       },
                errorElement: "em",
                errorPlacement: function ( error, element ) {
                    // Add the `invalid-feedback` class to the error element
                    error.addClass( "invalid-feedback" );

                    if ( element.prop( "type" ) === "checkbox" ) {
                        error.insertAfter( element.next( "label" ) );
                    } else {
                        error.insertAfter( element );
                    }
                },
                highlight: function ( element, errorClass, validClass ) {
                    $( element ).addClass( "is-invalid" ).removeClass( "is-valid" );
                },
                unhighlight: function (element, errorClass, validClass) {
                    $( element ).addClass( "is-valid" ).removeClass( "is-invalid" );
                }
});
</script>
<style type="text/css">
  .ajustando{
    width: 30%;
  }
  @media (max-width: 600px)
{
  .ajustando{
    width: 50%;
  }
}
#cep{
  width: 100px
}
#num{
  width: 100px
}
#uf{
  width: 50px
}
</style>
 <script type="text/javascript" >
    $(document).ready( function(){
        // alert("Okay")
    })
    // $('#cep').mask('00000000')
    function limpa_formulário_cep() {
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }

    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(cep) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                // alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };
    </script>
    <script>
      $(document).ready(function(){
        $.ajax({
         url: "<?= url('cadastro/pdados') ?>",
          method: 'post',
          data: {data: 4},
          success: function(data){
          dados = JSON.parse(data);
          if (dados.cep != null)
          {
            $('#cep').val(dados.cep)
          }
          if (dados.rua != null)
          {
            $('#rua').val(dados.rua)
          }
          if (dados.numero != null)
          {
            $('#num').val(dados.numero)
          }
          if (dados.bairro != null)
          {
            $('#bairro').val(dados.bairro)
          }
          if (dados.cidade != null)
          {
            $('#cidade').val(dados.cidade)
          }
          if (dados.uf != null)
          {
            $('#uf').val(dados.uf)
          }
         }
        })
      })
    </script>
</body>

</html>



