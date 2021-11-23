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
    <script src="<?= base_url('assests/js/popper.min.js')?>"></script>
    <script src="<?= base_url('assests/jqu/jquery-ui.js')?>"></script>
  <link href="<?= base_url('assests/jqu/jquery-ui.css')?>" rel="stylesheet">
   <script src="<?= base_url('assests/js/jquery.validate.min.js') ?>"></script>
  <script src="<?= base_url('assests/js/additional-methods.min.js')?>"></script>
  <script src="<?= base_url('assests/js/messages_pt_BR.js') ?>"></script>
  <script src="https://kit.fontawesome.com/5778d43f78.js" crossorigin="anonymous"></script>
<script src="<?= base_url('assests/js/bootstrap.min.js')?>" ></script>
</head>
<body>

    <div class="tudo">
  
  <div id="topo" >
  <?php $this->load->view("nav"); ?>
 
</div>


  
  <div  class="conteudo  fun">
    <div id="content" role="main">
    <!-- Hero Section -->
    <div class="container space-2 corpo">
      <div class="w-md-80 w-lg-75 text-center mx-md-auto">
        <div class="mb-5">
          <h1 class="display-3 font-size-md-down-5 font-weight-semi-bold ">Blog</h1>
          
        </div>

        <!-- Form -->
        <form class="w-lg-75 mx-lg-auto ">
          <div class="d-flex align-items-center">

            <label class="sr-only" for="signupSrEmail">Procurar no blog</label>
            <div class="input-group">
              <input type="text" class="form-control" name="search" id="signupSrEmail" placeholder="O que você quer" aria-label="Search Front blog">
            </div>
            <button type="submit" class="btn btn-primary text-nowrap ml-3">
              <span class="fas fa-search font-size-1 mr-2"></span> Buscar
            </button>
          </div>
          <p>
  
  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Filtro
  </button>
</p>
<div class="collapse" id="collapseExample">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <h3>Categoria</h3>
        <input type="radio" name="categoria" value="exemplo">Exemplo<br>
        <input type="radio" name="categoria" value="exemplo">Exemplo<br>
        <input type="radio" name="categoria" value="exemplo">Exemplo<br>
        <input type="radio" name="categoria" value="exemplo">Exemplo<br>
        <input type="radio" name="categoria" value="exemplo">Exemplo<br>

      </div>
      <div class="col-lg-4">
        <h3>Data</h3><br>
        <label>De </label><br><input type="date" name=""><br><br>
        <label>Até </label><br><input type="date" name=""><br><br>

      </div>
      <div class="col-lg-4">
        <h3>Ordernar por</h3>
        
        <input type="radio" name="categoria" value="exemplo">Exemplo<br>
        <input type="radio" name="categoria" value="exemplo">Exemplo<br>
        <input type="radio" name="categoria" value="exemplo">Exemplo<br>
        <input type="radio" name="categoria" value="exemplo">Exemplo<br>
        <input type="radio" name="categoria" value="exemplo">Exemplo<br>
      </div>
      <div class="col-lg-4">
        
      </div>
    </div>
</div>
        </form>
        <!-- End Form -->
      </div>
    </div>
    <br>
    <br>
    <!-- End Hero Section -->

    <!-- Blog Card Section -->
    <div class="container space-2 space-bottom-lg-3">
      <div class="row">
        <div class="col-md-6 col-lg-4 mb-5">
          <!-- Blog Card -->
          <article class="card shadow h-100">
            <img class="card-img-top" src="<?= base_url("assests/img/img-blog/pug-801826_640.jpg")  ?>" alt="Image Description">
            <div class="card-body p-5">
              <a class="d-inline-block text-muted font-weight-medium text-uppercase small mb-2" href="#">Estilo de vida</a>
              <h2 class="h5 font-weight-medium">
                <a href="<?= base_url('blog/exemplo')  ?>">Como se proteger do frio</a>
              </h2>
              <p>Aprenda com o mestrinho</p>
            </div>

            <div class="card-footer border-0 pt-0 pb-5 px-0 mx-5">
              <div class="media align-items-center">
                <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Nataly Gaga">
                  <img width="70px" class="img-fluid rounded-circle"  src="<?= base_url("assests/img/img-usuario/p.jpg")  ?>" alt="Image Description">
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
            <img class="card-img-top" src="<?= base_url("assests/img/img-blog/men-2425121_1920.jpg")  ?>" alt="Image Description">
            <div class="card-body p-5">
              <a class="d-inline-block text-muted font-weight-medium text-uppercase small mb-2" href="#">Estilo de vida</a>
              <h3 class="h5 font-weight-medium">
                <a href="<?= base_url('blog/exemplo')  ?>">Seja feliz</a>
              </h3>
              <p>Dicas para viver bem</p>
            </div>

            <div class="card-footer border-0 pt-0 pb-5 px-0 mx-5">
              <div class="media align-items-center">
                <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Aaron Larsson">
                  <img width="70px" class="img-fluid rounded-circle" src="<?= base_url("assests/img/img-usuario/pe.jpg")  ?>" alt="Image Description">
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
            <img class="card-img-top" src="<?= base_url("assests/img/img-blog/hands-437968_1920.jpg")  ?>" alt="Image Description">
            <div class="card-body p-5">
              <a class="d-inline-block text-muted font-weight-medium text-uppercase small mb-2" href="#">Estilo de vida</a>
              <h3 class="h5 font-weight-medium">
                <a href="<?= base_url('blog/exemplo')  ?>">Psicologia e o amor</a>
              </h3>
              <p>O que a psicologia diz sobre o sentimento mais bonito do mundo</p>
            </div>

            <div class="card-footer border-0 pt-0 pb-5 px-0 mx-5">
              <div class="media align-items-center">
                <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Hanna Wolfe">
                  <img width="70px" class="img-fluid rounded-circle" src="<?= base_url("assests/img/img-usuario/is.jpg")  ?>" alt="Image Description">
                </div>
                
                <div class="media-body d-flex justify-content-end text-muted font-size-1 ml-2">
                  Julho 15 2019
                </div>
              </div>
            </div>
          </article>
          <!-- End Blog Card -->
        </div>

        <div class="col-md-6 mb-5">
          <!-- Blog Card -->
          <article class="card shadow h-100">
            <img class="card-img-top" src="<?= base_url("assests/img/img-blog/business-woman-2697954_1920.jpg")  ?>" alt="Image Description">
            <div class="card-body p-5">
              <a class="d-inline-block text-muted font-weight-medium text-uppercase small mb-2" href="#">Desenvolvimento pessoal</a>
              <h3 class="h5 font-weight-medium">
                <a href="<?= base_url('blog/exemplo')  ?>">Vantagens de falar inglês</a>
              </h3>
              <p>como falar inglês pode te dar vantagem competitiva no mercado</p>
            </div>

            <div class="card-footer border-0 pt-0 pb-5 px-0 mx-5">
              <div class="media align-items-center">
                <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Hanna Wolfe">
                   <img width="70px" class="img-fluid rounded-circle" src="<?= base_url("assests/img/img-usuario/pe.jpg")  ?>" alt="Image Description">
                </div>
                
                <div class="media-body d-flex justify-content-end text-muted font-size-1 ml-2">
                  Julho 15 2019
                </div>
              </div>
            </div>
          </article>
          <!-- End Blog Card -->
        </div>

        <div class="col-md-6 mb-5">
          <!-- Blog Card -->
          <article class="card shadow h-100">
            <img class="card-img-top" src="<?= base_url("assests/img/img-blog/cat-4611189_1920.jpg")  ?>" alt="Image Description">
            <div class="card-body p-5">
              <a class="d-inline-block text-muted font-weight-medium text-uppercase small mb-2" href="#">Estilo de vida</a>
              <h3 class="h5 font-weight-medium">
                <a href="<?= base_url('blog/exemplo')  ?>">Os gatinhos sofrem!</a>
              </h3>
              <p>Como é dificil ser um gatinho neste mundo moderno e competitivo</p>
            </div>

            <div class="card-footer border-0 pt-0 pb-5 px-0 mx-5">
              <div class="media align-items-center">
                <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Nataly Gaga">
                  <img width="70px" class="img-fluid rounded-circle" src="<?= base_url("assests/img/img-usuario/cat-2934720_1920.jpg")  ?>" alt="Image Description">
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
            <img class="card-img-top" src="<?= base_url("assests/img/img-blog/saxophone-546303_1280.jpg")  ?>" alt="Image Description">
            <div class="card-body p-5">
              <a class="d-inline-block text-muted font-weight-medium text-uppercase small mb-2" href="#">Estilo de vida</a>
              <h3 class="h5 font-weight-medium">
                <a href="<?= base_url('blog/exemplo')  ?>">Como a música pode te ajudar</a>
              </h3>
              <p>O poder da música para transformar a nossa vida em algo melhor</p>
            </div>

            <div class="card-footer border-0 pt-0 pb-5 px-0 mx-5">
              <div class="media align-items-center">
                <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Aaron Larsson">
                  <img width="70px" class="img-fluid rounded-circle" src="<?= base_url("assests/img/img-usuario/vi.jpg")  ?>" alt="Image Description">
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
          <img class="card-img-top" src="<?= base_url("assests/img/img-blog/achieve-1822503_1920.jpg")  ?>" alt="Image Description">
            <div class="card-body p-5">
              <a class="d-inline-block text-muted font-weight-medium text-uppercase small mb-2" href="#">Estilo de vida</a>
              <h2 class="h5 font-weight-medium">
                <a href="<?= base_url('blog/exemplo')  ?>">Esporte e sua viada</a>
              </h2>
              <p>Como o esporte pode mudar a sua vida para melhor</p>
            </div>

            <div class="card-footer border-0 pt-0 pb-5 px-0 mx-5">
              <div class="media align-items-center">
                <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Nataly Gaga">
                  <img width="70px" class="img-fluid rounded-circle"  src="<?= base_url("assests/img/img-usuario/p.jpg")  ?>" alt="Image Description">
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
            <img class="card-img-top" src="<?= base_url("assests/img/img-blog/man-791049_1920.jpg")  ?>" alt="Image Description">
            <div class="card-body p-5">
              <a class="d-inline-block text-muted font-weight-medium text-uppercase small mb-2" href="#">Desenvolvimento pessoal</a>
              <h3 class="h5 font-weight-medium">
                <a href="<?= base_url('blog/exemplo')  ?>">Mantendo o foco</a>
              </h3>
              <p>Dicas para ter um foco maior no trabalho em um mundo cheio de distrações</p>
            </div>

            <div class="card-footer border-0 pt-0 pb-5 px-0 mx-5">
              <div class="media align-items-center">
                <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Hanna Wolfe">
                  <img width="70px" class="img-fluid rounded-circle" src="<?= base_url("assests/img/img-usuario/is.jpg")  ?>" alt="Image Description">
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

      <div class="space-bottom-2"></div>

      <!-- Pagination -->
      <nav aria-label="Page navigation">
        <ul class="pagination mb-0">
          <li class="page-item mr-auto">
            <a class="page-link" href="#" aria-label="Previous">
              <span aria-hidden="true">«</span>
              <span class="d-none d-sm-inline-block ml-1">Prev</span>
            </a>
          </li>
          <li class="page-item active"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
          <li class="page-item"><a class="page-link" href="#">5</a></li>
          <li class="page-item ml-auto">
            <a class="page-link" href="#" aria-label="Next">
              <span class="d-none d-sm-inline-block mr-1">Next</span>
              <span aria-hidden="true">»</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- End Pagination -->
    </div>
    <!-- End Blog Card Section -->

    
  </div>
    <br>
    <br>       
    </div>
   
  
  <div class="rodape cordepe">
  <?php $this->load->view("auxilio/footer"); ?>

  </div>
  
  
</div>
</body>
</html>