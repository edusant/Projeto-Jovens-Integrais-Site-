<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title><?= $titulo ?></title>
  <link href="<?= base_url('assests/sistema/vendor/fontawesome-free/css/all.min.css')?> " rel="stylesheet" type="text/css">
  <link href="<?= base_url('assests/sistema/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css">
  <link href="<?= base_url('assests/sistema/css/ruang-admin.min.css')?>" rel="stylesheet">

</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <?php $this->load->view('candidato/auxilio/navadmum') ?>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
           <?php $this->load->view('candidato/auxilio/navadmdois') ?>
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
              <?php
              echo "<h1>Para finalizar a inscrção para a turma, comfirme as suas informações</h1><hr><hr><hr>";
              // var_dump($pessoais);
              if (isset($pessoais)) {
                echo "<h1>Dados pessoais</h1>";
                if ($pessoais['nacinalidade']) {
                  echo '<p class="h5">Nacionalidade: '. htmlspecialchars($pessoais['nacinalidade']).'</p>';
                }
                if ($pessoais['estadocivil']) {
                  echo '<p class="h5">Estado civil: '.htmlspecialchars($pessoais['estadocivil']).'</p>';
                }
                if ($pessoais['telefone']) {
                  echo '<p class="h5">telefone: '. htmlspecialchars($pessoais['telefone']).'</p>';
                }

                echo "<a href='".base_url('candidato/cadastro?f=1&v=1')."' class='btn btn-info mt-4'>Editar</a>";
                echo "<hr>";
              }

              if (isset($familia)) {
                echo "<h1>Dados do responsável</h1>";
                if (isset($familia['nome']))
                {
                  echo '<p class="h5">Nome: '. htmlspecialchars($familia['nome']).'</p>';
                }
                if (isset($familia['datanascimento']))
                {
                  echo '<p class="h5">Data de nascimento: '. htmlspecialchars($familia['datanascimento']).'</p>';
                }
                if (isset($familia['telefone']))
                {
                  echo '<p class="h5">Telefone: '. htmlspecialchars($familia['telefone']).'</p>';
                }
                if (isset($familia['paren']))
                {
                  echo '<p class="h5">Parentesco: '. htmlspecialchars($familia['paren']).'</p>';
                }

                echo "<button class='btn btn-info mt-4'>Editar</button>";
                echo "<hr>";
              }


              if (isset($profi)) {
                echo "<h1>Dados do profissionais</h1>";
                if (isset($profi['estado']))
                {
                  echo '<p class="h5">Situação atual: '. htmlspecialchars($profi['estado']).'</p>';
                }
                if (isset($profi['cargo']))
                {
                  echo '<p class="h5">Cargo: '. htmlspecialchars($profi['cargo']).'</p>';
                }

                if (isset($profi['ultimocargo']))
                {
                  echo '<p class="h5">Qual foi o seu último cargo: '. htmlspecialchars($profi['ultimocargo']).'</p>';
                }

                if (isset($profi['renda']))
                {
                  echo '<p class="h5">Renda: '.htmlspecialchars($profi['renda']).'</p>';
                }
                if (isset($profi['quantpess']))
                {
                  echo '<p class="h5">Qauntidades de pessoas que moram na sua casa: '. htmlspecialchars($profi['quantpess']).'</p>';
                }
                if (isset($profi['comquemmora']))
                {
                  echo '<p class="h5">Com quem mora atualmente: '.htmlspecialchars($profi['comquemmora']).'</p>';
                }


                echo "<button class='btn btn-info mt-4'>Editar</button>";
                echo "<hr>";
              }

              if (isset($endereco)) {
                echo "<h1>Endereço</h1>";
                if (isset($endereco['cep']))
                {
                  echo '<p class="h5">CEP: '.htmlspecialchars($endereco['cep']).'</p>';
                }
                if (isset($endereco['rua']))
                {
                  echo '<p class="h5">'. htmlspecialchars($endereco['rua']).'</p>';
                }

                if (isset($endereco['bairro']))
                {
                  echo '<p class="h5">Bairro: '. htmlspecialchars($endereco['bairro']).'</p>';
                }

                if (isset($endereco['cidade']))
                {
                  echo '<p class="h5">Cidade: '. htmlspecialchars($endereco['cidade']).'</p>';
                }
                if (isset($endereco['uf']))
                {
                  echo '<p class="h5">Estado: '.htmlspecialchars($endereco['uf']).'</p>';
                }
                if (isset($endereco['numero']))
                {
                  echo '<p class="h5">Número: '. htmlspecialchars($endereco['numero']).'</p>';
                }

                echo "<button class='btn btn-info mt-4'>Editar</button>";

                echo "<hr>";


              }

              if (isset($escola)) {
                // var_dump($escola);
                echo "<h1>Dados escolares</h1>";
                if (isset($escola['escolaridade']))
                {
                  echo '<p class="h5">Escolaridade: '. htmlspecialchars($escola['escolaridade']).'</p>';
                }
                if (isset($escola['periodo']))
                {
                  echo '<p class="h5">Período: '.htmlspecialchars($escola['periodo']).'</p>';
                }
                if (isset($escola['curso']))
                {
                  echo '<p class="h5">Curso que faz atualmente: '.htmlspecialchars($escola['curso']).'</p>';
                }

                echo "<button class='btn btn-info mt-4'>Editar</button>";
                echo "<hr>";
              }


              if (isset($avaliacaoum)) {
                // var_dump($avaliacaoum);
                echo "<h1>Sobre a sua história de vida</h1>";
                // historiasuperacao
                if (isset($avaliacaoum['historiafelicidade'])) {
                  echo '<p class="h5">Conte uma história que te deixou feliz (motivado, empolgado, etc.).<br> </p>';
                  echo '<div  class="p-2 border border-success">
                  '.htmlspecialchars($avaliacaoum['historiafelicidade']).'
                  </div>';


                }
                if (isset($avaliacaoum['historiasuperacao'])) {
                  echo '<p class="h5 mt-4">Conte uma história de superação (desafio) que você já viveu.<br> </p>';
                  echo '<div  class="p-2 border border-success">
                  '.htmlspecialchars($avaliacaoum['historiasuperacao']).'
                  </div>';


                }
                echo "<button class='btn btn-info mt-4'>Editar</button>";
                echo "<hr>";
              }











              if (isset($integralum)) {
                echo "<h1>Sobre seu entorno</h1>";
                  if (isset($integralum['confianca'])) {
                    echo '<p class="h5 mt-4">O que você mudaria na sua comunidade
                    (escola, bairro, rua), qual seria seu papel nessa mudança<br>
                    </p>';
                    echo '<div  class="p-2 border border-success">
                    '.$integralum['confianca'].'
                    </div>';


                  }

                  if (isset($integralum['mudancas'])) {
                    echo '<p class="h5 mt-4">A respeito das mudanças da sua via e suas conseqeências<br> </p>';
                    echo '<div  class="p-2 border border-success">
                    '.$integralum['mudancas'].'
                    </div>';


                  }




                    if (isset($apoio))
                    {
                      echo "<p class='h5 text-info'>Em casa de necessidade, qual é a sua rede de apoio</p>";

                      foreach ($apoio as $valor)
                      {
                        echo"<button disabled class='btn btn-light'>".$valor['nome']."</button>";
                      }
                      echo "<br><button class='btn btn-info mt-4'>Editar</button>";
                      echo "<hr>";
                    }


}

                    echo "<a class='btn btn-success mb-4 mt-2' href='".base_url('cadastro/cadastroemturma')."'>Realizar inscrição no processo seletivo</a>";

              ?>

      </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>copyright &copy; 2019 - Projeto jovens integrais

            </span>
          </div>
        </div>
      </footer>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="<?= base_url('assests/sistema/vendor/jquery/jquery.min.js')?>"></script>
  <script src="<?= base_url('assests/sistema/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
  <script src="<?= base_url('assests/sistema/vendor/jquery-easing/jquery.easing.min.js')?>"></script>
  <script src="<?= base_url('assests/sistema/js/ruang-admin.min.js')?>"></script>

</body>

</html>
