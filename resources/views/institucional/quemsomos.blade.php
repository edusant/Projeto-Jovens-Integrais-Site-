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





    <!-- <link rel="shortcut icon" type="text/css" href="<?= url('assests/img/5stdy_logo.png')?>"> -->
</head>
<body>

    <div class="tudo">

  <div id="topo" >
  @include('nav')

</div>




  <div  class="conteudo">
     <div class="container">
          <p class="h3 mt-5 mb-4 text-center">O projeto jovens integrais</p>
          <span class=" mt-5 mb-4 text-justify">

             <hr>

        <p>O projeto Jovens integrais oferece um programa de desenvolvimento pessoal e professional para jovens com pouca oportunidades. O programa tem duração de 6 meses e tem como preincipal objetivo despertar estes jovens para o seu potencial e assim conecta-los com oportunidades professionais e/ou educacionais.</p>

        <hr>
           </span>

        </div>
  <div class="container" id="pessoal">
    <p class="h3 mt-5 mb-4 text-center">Nossa equipe</p>
    <div class="row">

      <div class="col-md-6 mb-5 d">
          <!-- Blog Card -->
          <article class="card h-100 ">
            <img class="card-img-top" src="<?= url('/assests/img/img-pessoal/m.png') ?>" alt="Card image cap">
    <div class="card-body">
      <h4 class="card-title">Marcelo Cardoso</h4>
      <strong>Fundador do Projeto Jovens Integrais. </strong>
      <br>
               <p class="card-text">
                Na sua jornada profissional, foi gerente financeiro da Método Engenharia, posteriormente foi presidente das empresas HOPI HARI, Natura e Fleury.
                Marcelo codificou a empresa CHIE, onde segue no seu propósito, levando consciência, evolução e involução para o mundo organizacional.
                A iniciativa do Projeto Jovens Integrais, foi um despertar de um grande sonho pessoal. No Projeto aplica seu vasto e diversificado conhecimento para ajudar os jovens a conduzir com consciência a realidade que emerge diante aos seus propósitos.</p>
        </div>

          </article>
          <!-- End Blog Card -->
        </div>

<div class="col-md-6 mb-5 d">
          <!-- Blog Card -->
          <article class="card h-100 ">
          <img class="card-img-top" src="<?= url('/assests/img/img-pessoal/w.png') ?>" alt="Card image cap">
    <div class="card-body">
      <h4 class="card-title">Maria Del Mar Franco </h4>
      <strong>Fundadora do Projeto Jovens Integrais.</strong>

               <p class="card-text">
              Formada em Psicologia, pela Universidade de Guarulhos. É fundadora do Instituto Evoluir que tem como conceitos o acolhimento incondicional da Abordagem Humanista e a ampliação da consciência da Abordagem Integral.
              Trabalha na condução de terapia de Grupos desde 1991 e, mais recentemente¸ desenvolve projetos de educação no Instituto Evoluir com cursos, workshops e palestras. É engajada em trabalhos voluntários para comunidades na região de São Paulo.
              No projeto aplica seu vasto conhecimento e experiência, em especial aqueles decorrentes da vivencia na Psicologia.

              </p>
        </div>
          </article>
          <!-- End Blog Card -->
        </div>
<div class="col-md-6 mb-5 d">
          <!-- Blog Card -->
          <article class="card h-100 ">
            <img class="card-img-top" src="<?= url('/assests/img/img-pessoal/m.png') ?>" alt="Card image cap">
    <div class="card-body">
      <h4 class="card-title">Ismael Gadelha </h4>
      <strong>Coordenador do Projeto  </strong>
      <br>
               <p class="card-text">
                 Psicólogo, graduação com ênfase em Clínica Psicanalítica e Técnicas de Aconselhamento Psicológico pela Universidade Brasil. Beneficiário do Programa Institucional de Bolsa de Iniciação Científica (PIBIC) da Universidade Brasil.
Aplica seu conhecimento adquirido ao longo de sua formação em Psicologia e da sua trajetória profissional no Projeto.

               </p>
        </div>

          </article>
          <!-- End Blog Card -->
        </div>
        <div class="col-md-6 mb-5 d">
          <!-- Blog Card -->
          <article class="card h-100 ">
          <img class="card-img-top" src="<?= url('/assests/img/img-pessoal/w.png') ?>" alt="Card image cap">
    <div class="card-body">
      <h4 class="card-title">Paula Petrella</h4>
      <strong>Psicóloga.</strong>

               <p class="card-text">
              Psicóloga existencialista, mediadora de grupos, especialista em práticas inclusivas e gestão das diferenças, pesquisadora pelo Instituto Singularidades.
              Promove cultura de inclusão da diversidade desenvolvendo programas de formação em instituições escolares, organizacionais e públicas.
              Dentro do Projeto atua com atendimento individual e em grupo, com psicoterapia e plantão psicológico.
              Atualmente em Certificação pela MetaIntegral Brasil e Constelações Sistêmicas pelo Ipq USP
              </p>
        </div>
          </article>
          <!-- End Blog Card -->
        </div>

<div class="col-md-6 mb-5 d">
          <!-- Blog Card -->
          <article class="card h-100 ">
            <img class="card-img-top" src="<?= url('/assests/img/img-pessoal/w.png') ?>" alt="Card image cap">
    <div class="card-body">
      <h4 class="card-title">Fernanda Malaquias  </h4>
      <strong>Auxiliar de coordenação </strong>
      <br>
               <p class="card-text">
                 Estudante de Psicologia, estagiaria e envolvida em trabalhos voluntários. No Projeto lida com questões que o envolve, exercendo seu oficio na parte de organização, oferecendo suporte e disponibilidade a cada encontro.
               </p>
        </div>

          </article>
          <!-- End Blog Card -->
        </div>
        <div class="col-md-6 mb-5 d">
          <!-- Blog Card -->
          <article class="card h-100 ">
          <img class="card-img-top" src="<?= url('/assests/img/img-pessoal/m.png') ?>" alt="Card image cap">
    <div class="card-body">
      <h4 class="card-title">Pedro Pinto Cardoso</h4>
      <strong></strong>

               <p class="card-text">
                Formado em administração na Grand View University, nos EUA. Passou a maior parte da vida dentro das quadras de vôlei. O poder de transformação do esporte se mostrou ainda mais claro ao proporcionar a experiência de estudar em outro pais. A partir daí novos interesses e paixões também surgiram e com elas uma vontade de servir. Pedro passou 1 ano e meio no Panamá desenvolvendo projetos comunitários no interior do pais. Ao voltar ao Brasil se envolveu na parte de coordenação do PJI, onde ainda participa mas de maneira distante em função da vida ainda ativa como atleta profissional de voleibol

              </p>
        </div>
          </article>
          <!-- End Blog Card -->
        </div>













    </div>
  </div>
  </div>


  <div class="rodape cordepe">
@include('auxilio/footer')
  </div>


</div>
</body>
</html>
