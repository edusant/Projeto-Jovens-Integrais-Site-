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
    <style type="text/css">
      .cabca{
        -webkit-tap-highlight-color: rgba(0,0,0,0);


--font-family-sans-serif: "PT Sans Caption",sans-serif;
--font-family-monospace: SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;
font-family: PT Sans Caption,sans-serif;
font-size: .875rem;
font-weight: 400;
line-height: 1.5;
color: #212529;
text-align: left;
-webkit-box-direction: normal;
box-sizing: border-box;
display: block;
padding: .75rem 1.5rem;
margin-bottom: 0;
background-color: #fff;
border-bottom: 0 solid rgba(0,0,0,.125);
border-radius: 0 0 0 0;
      }
    </style>



</head>
<body>

    <div class="tudo">

  <div id="topo" >
  @include('nav')
 <header class="masthead h9 text-center text-white">
    <div class="masthead-content">
      <div class="container">
        <h1 class="masthead-heading mb-0">Projeto Jovens Integrais</h1>
      </div>
    </div>
    <div class="bg-circle-1 bg-circle"></div>
    <div class="bg-circle-2 bg-circle"></div>
    <div class="bg-circle-3 bg-circle"></div>
    <div class="bg-circle-4 bg-circle"></div>
  </header>


  </div>

  <div  class="conteudo fun ">

                <div class="container prabaixo" >
        <div class=" sobreinfo" style="margin-bottom: 25vh;">



                  <div  class="info">
        <div class="third-col">
          <span class="icon"><i class="icon-cog"></i></span>
          <h2>Visão e Abordagem</h2>
          <p>O projeto tem como base, mas não se limita a abordagem integral, que engloba uma série de práticas pautadas pela integridade, amorasidadade, abundância, funcionalidade e inclusão</p>
          <p>Através do despertar do potencial de cada jovem, acreditamoscoloborar para uma sociedade mais equilibrada</p>
          <p></p>
        </div>

        </div>

        </div>









        <div class="container">

      <div class="mudaraqui">
        <div class="">
          <h1 class="h1 mt-5 mb-4 text-center">O desenrolar do projeto se da em três fases</h1>

        </div>
      </div>
      <div class="row">
        <div class="col-md-4 text-center animate-box fadeInUp animated-fast">

            <div class="card servico" >
    <div class="card-body">
      <h4 class="card-title">Fase 1<br>Transformação</h4>
      <p class="card-text">Enfase em pratica de auto-conhecimento com o objetivo de promover clareza para as seguintes fases</p>






      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#trans">
  Saiba mais
</button>

<!-- Modal -->
<div class="modal fade" id="trans" tabindex="-1" role="dialog" aria-labelledby="trans" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-dark" id="TituloModalLongoExemplo">Fase da transformação</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-dark">
        <div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/IHWgRX9vbxs"></iframe>
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>






    </div>
        </div>
      </div>
        <div class="col-md-4 text-center animate-box fadeInUp animated-fast">
          <div class="card ou servico" >
    <div class="card-body">
      <h4 class="card-title">Fase 2 <br>Decisão</h4>
      <p class="card-text">Os jovens são incentivados a fazerem escolhas sobre o seu futuro. Seja ela entrar na faculdade ou começar sua própria empresa</p>



     <!-- Botão para acionar modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalLongoExemplo">
  Saiba mais
</button>

<!-- Modal -->
<div class="modal fade" id="ModalLongoExemplo" tabindex="-1" role="dialog" aria-labelledby="TituloModalLongoExemplo" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-dark" id="TituloModalLongoExemplo">Fase da decisão</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-dark">
        Aqui vem o texto com uma explicação melhor
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>







    </div>
        </div>
                </div>
        <div class="col-md-4 text-center animate-box fadeInUp animated-fast">
           <div class="card servico" >
    <div class="card-body">
      <h4 class="card-title">Fase 3<br>Implemenação</h4>
      <p class="card-text">Após a escolha os jovens recebem suporte para colocar em prática</p>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#imple">
  Saiba mais
</button>

<!-- Modal -->
<div class="modal fade" id="imple" tabindex="-1" role="dialog" aria-labelledby="imple" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-dark" id="TituloModalLongoExemplo">Fase da transformação</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-dark">
        Aqui vem o texto com uma explicação melhor
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>









    </div>
        </div>

        </div>




      </div>
    </div>

    </div>

   <section class="container">
                <h2 class="h1 mt-5 mb-4 text-center">Comentários de nossos participantes</h2>
                <div class="row py-5 ">
                    <div class="col-md ">
                        <blockquote class="bg-white rounded shadow mb-4 p-4 p-lg-5 text-center">
                            <img width="70px" class="img-fluid rounded-circle" src="<?= url("assests/img/img-usuario/pe.jpg")  ?>" alt="Pedro">
                            <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tincidunt diam sed quam tincidunt venenatis. </p>
                            <cite class="small text-uppercase">Pedro</cite>
                        </blockquote>
                    </div>
                    <div class="col-md">
                        <blockquote class="bg-white rounded shadow mb-4 p-4 p-lg-5 text-center">
                            <img width="70px" class="img-fluid rounded-circle" src="<?= url("assests/img/img-usuario/vi.jpg")  ?>" alt="Victor">
                            <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tincidunt diam sed quam tincidunt venenatis. </p>
                            <cite class="small text-uppercase">Victor</cite>
                        </blockquote>
                    </div>
                    <div class="col-md ">
                      <blockquote class="bg-white rounded shadow mb-4 p-4 p-lg-5 text-center">
                            <img width="70px" class="img-fluid rounded-circle" src="<?= url("assests/img/img-usuario/p.jpg")  ?>" alt="Fernanda">
                            <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tincidunt diam sed quam tincidunt venenatis. </p>
                            <cite class="small text-uppercase">Fernanda</cite>
                        </blockquote>
                    </div>
                </div>
            </section>
           <div class="container">

              {{-- <p class="h1 mt-5 mb-4 text-center">Principais destaques do blog</p> --}}
              {{-- tira daqui --}}
      {{-- <div class="container space-2 space-bottom-lg-3">
      <div class="row">
        <div class="col-md-6 col-lg-4 mb-5">
          <!-- Blog Card -->
          <article class="card shadow h-100">
            <img class="card-img-top" src="<?= url("assests/img/img-blog/pug-801826_640.jpg")  ?>" alt="Image Description">
            <div class="card-body p-5">
              <a class="d-inline-block text-muted font-weight-medium text-uppercase small mb-2" href="#">Estilo de vida</a>
              <h2 class="h5 font-weight-medium">
                <a href="<?= url('Blog/exemplo')  ?>">Como se proteger do frio</a>
              </h2>
              <p>Aprenda com o mestrinho</p>
            </div>

            <div class="card-footer border-0 pt-0 pb-5 px-0 mx-5">
              <div class="media align-items-center">
                <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Nataly Gaga">
                  <img width="70px" class="img-fluid rounded-circle"  src="<?= url("assests/img/img-usuario/p.jpg")  ?>" alt="Image Description">
                </div>

                <div class="media-body d-flex justify-content-end text-muted font-size-1 ml-2">
                  Julho 15 2019
                </div>
              </div>
            </div>
          </article>
          <!-- End Blog Card -->
        </div>

        <div class="col-md-6 col-lg-4 mb-5">
          <!-- Blog Card -->
          <article class="card shadow h-100">
            <img class="card-img-top" src="<?= url("assests/img/img-blog/men-2425121_1920.jpg")  ?>" alt="Image Description">
            <div class="card-body p-5">
              <a class="d-inline-block text-muted font-weight-medium text-uppercase small mb-2" href="#">Estilo de vida</a>
              <h3 class="h5 font-weight-medium">
                <a href="<?= url('Blog/exemplo')  ?>">Seja feliz</a>
              </h3>
              <p>Dicas para viver bem</p>
            </div>

            <div class="card-footer border-0 pt-0 pb-5 px-0 mx-5">
              <div class="media align-items-center">
                <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Aaron Larsson">
                  <img width="70px" class="img-fluid rounded-circle" src="<?= url("assests/img/img-usuario/pe.jpg")  ?>" alt="Image Description">
                </div>
                <div class="media-body d-flex justify-content-end text-muted font-size-1 ml-2">
                  Julho 15 2019
                </div>
              </div>
            </div>
          </article>
          <!-- End Blog Card -->
        </div>

        <div class="col-md-6 col-lg-4 mb-5">
          <!-- Blog Card -->
          <article class="card shadow h-100">
            <img class="card-img-top" src="<?= url("assests/img/img-blog/hands-437968_1920.jpg")  ?>" alt="Image Description">
            <div class="card-body p-5">
              <a class="d-inline-block text-muted font-weight-medium text-uppercase small mb-2" href="#">Estilo de vida</a>
              <h3 class="h5 font-weight-medium">
                <a href="<?= url('Blog/exemplo')  ?>">Psicologia e o amor</a>
              </h3>
              <p>O que a psicologia diz sobre o sentimento mais bonito do mundo</p>
            </div>

            <div class="card-footer border-0 pt-0 pb-5 px-0 mx-5">
              <div class="media align-items-center">
                <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Hanna Wolfe">
                  <img width="70px" class="img-fluid rounded-circle" src="<?= url("assests/img/img-usuario/is.jpg")  ?>" alt="Image Description">
                </div>

                <div class="media-body d-flex justify-content-end text-muted font-size-1 ml-2">
                  Julho 15 2019
                </div>
              </div>
            </div>
          </article>
          <!-- End Blog Card -->
        </div>





        <div class="col-md-6 col-lg-4 mb-5">
          <!-- Blog Card -->
          <article class="card shadow h-100">
            <img class="card-img-top" src="<?= url("assests/img/img-blog/saxophone-546303_1280.jpg")  ?>" alt="Image Description">
            <div class="card-body p-5">
              <a class="d-inline-block text-muted font-weight-medium text-uppercase small mb-2" href="#">Estilo de vida</a>
              <h3 class="h5 font-weight-medium">
                <a href="<?= url('Blog/exemplo')  ?>">Como a música pode te ajudar</a>
              </h3>
              <p>O poder da música para transformar a nossa vida em algo melhor</p>
            </div>

            <div class="card-footer border-0 pt-0 pb-5 px-0 mx-5">
              <div class="media align-items-center">
                <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Aaron Larsson">
                  <img width="70px" class="img-fluid rounded-circle" src="<?= url("assests/img/img-usuario/vi.jpg")  ?>" alt="Image Description">
                </div>

                <div class="media-body d-flex justify-content-end text-muted font-size-1 ml-2">
                  Julho 15 2019
                </div>
              </div>
            </div>
          </article>
          <!-- End Blog Card -->
        </div>

        <div class="col-md-6 col-lg-4 mb-5">
          <!-- Blog Card -->
          <article class="card shadow h-100">
          <img class="card-img-top" src="<?= url("assests/img/img-blog/achieve-1822503_1920.jpg")  ?>" alt="Image Description">
            <div class="card-body p-5">
              <a class="d-inline-block text-muted font-weight-medium text-uppercase small mb-2" href="#">Estilo de vida</a>
              <h2 class="h5 font-weight-medium">
                <a href="<?= url('Blog/exemplo')  ?>">Esporte e sua viada</a>
              </h2>
              <p>Como o esporte pode mudar a sua vida para melhor</p>
            </div>

            <div class="card-footer border-0 pt-0 pb-5 px-0 mx-5">
              <div class="media align-items-center">
                <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Nataly Gaga">
                  <img width="70px" class="img-fluid rounded-circle"  src="<?= url("assests/img/img-usuario/p.jpg")  ?>" alt="Image Description">
                </div>

                <div class="media-body d-flex justify-content-end text-muted font-size-1 ml-2">
                  Julho 15 2019
                </div>
              </div>
            </div>
          </article>
          <!-- End Blog Card -->
        </div>

        <div class="col-md-6 col-lg-4 mb-5">
          <!-- Blog Card -->
        <article class="card shadow h-100">
            <img class="card-img-top" src="<?= url("assests/img/img-blog/man-791049_1920.jpg")  ?>" alt="Image Description">
            <div class="card-body p-5">
              <a class="d-inline-block text-muted font-weight-medium text-uppercase small mb-2" href="#">Desenvolvimento pessoal</a>
              <h3 class="h5 font-weight-medium">
                <a href="<?= url('Blog/exemplo')  ?>">Mantendo o foco</a>
              </h3>
              <p>Dicas para ter um foco maior no trabalho em um mundo cheio de distrações</p>
            </div>

            <div class="card-footer border-0 pt-0 pb-5 px-0 mx-5">
              <div class="media align-items-center">
                <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Hanna Wolfe">
                  <img width="70px" class="img-fluid rounded-circle" src="<?= url("assests/img/img-usuario/is.jpg")  ?>" alt="Image Description">
                </div>

                <div class="media-body d-flex justify-content-end text-muted font-size-1 ml-2">
                  Julho 15 2019
                </div>
              </div>
            </div>
          </article>
          <!-- End Blog Card -->
        </div>
      </div>


      <!-- End Pagination -->
    </div> --}}

    {{-- Até aqui  --}}
    <!-- End Blog Card Section -->

    <!-- End Blog Card Section -->
 <div class="partner-area section-padding-0-100 ajj">
        <div class="container">
            <div class="row">
                <div class="col-12">
                  <br><br><br>
                  <h2 class="text-center">Apoio</h2>
                    <div class="partners-logo d-flex align-items-center justify-content-between flex-wrap">
                        <a href="#"><img src="<?= url("assests/img/clients-img/partner-1.png")?>" alt=""></a>
                        <a href="http://institutoevoluir.com.br/" target="_blank"><img src="<?= url("assests/img/clients-img/partner-2.png")  ?>"  alt="instituto evoluir"></a>
                        <a href="#"><img src="<?= url("assests/img/clients-img/partner-3.png")  ?>" alt=""></a>
                        <a href="#"><img src="<?= url("assests/img/clients-img/partner-4.png")  ?>" alt=""></a>
                        <a href="#"><img src="<?= url("assests/img/clients-img/partner-5.png")  ?>" alt=""></a>
                        <br><br>
                        <a href="" class="btn btn-info ajeitadordemargem">Apoe-nos vocês também!</a>
                        <br><br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

  <div class="rodape cordepe">
     <!-- Footer -->
<?php //$this->load->view("auxilio/footer"); ?>
@include('auxilio/footer')
<!-- Footer -->
  </div>

</div>
</body>
</html>
