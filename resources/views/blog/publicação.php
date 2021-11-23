
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
  <div  class="conteudo container">
    <div class="row">
        <div class="col-md-9">

          <article class="c">
            <div class="c text-center">
              
              
                <h1 class="card-title">Os gatinhos sofrem!</h1>
                <p class="text-center h6">
                Como é dificil ser um gatinho neste mundo moderno e competitivo
              </p>
              
            </div>
            <a>
              <img class="card-img" src="<?= base_url("assests/img/img-blog/cat-4611189_1920.jpg")  ?>" alt="">
            </a>
            <div class="card-body">
 <hr>

        <!-- Post Content -->
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, vero, obcaecati, aut, error quam sapiente nemo saepe quibusdam sit excepturi nam quia corporis eligendi eos magni recusandae laborum minus inventore?</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat. Temporibus, voluptatibus.</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, doloribus, dolorem iusto blanditiis unde eius illum consequuntur neque dicta incidunt ullam ea hic porro optio ratione repellat perspiciatis. Enim, iure!</p>

        <blockquote></blockquote>kquote class="blockquote">
          <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
          <footer class="blockquote-footer">Someone famous in
            <cite title="Source Title">Source Title</cite>
          </footer>
        </blockquote>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nostrum, aliquid, animi, ut quas placeat totam sunt tempora commodi nihil ullam alias modi dicta saepe minima ab quo voluptatem obcaecati?</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dolor quis. Sunt, ut, explicabo, aliquam tenetur ratione tempore quidem voluptates cupiditate voluptas illo saepe quaerat numquam recusandae? Qui, necessitatibus, est!</p>


            </div>
          </article><!-- /.card -->

        </div>
        <div class="col-md-3 ml-auto">

         <div class="card my-4">
          <h5 class="card-header">Pesquisar</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Buscar no blog">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Ir!</button>
              </span>
            </div>
          </div>
        </div>

          <aside class=" si">
            <div class="car">
              <div class="card-body">
                <h4 class="card-title text-center">Categotias</h4>
                <a class="btn btn-light btn-sm mb-1" href="#">Estilo de vida</a>
                <a class="btn btn-light btn-sm mb-1" href="#">Négocios</a>
                <a class="btn btn-light btn-sm mb-1" href="#">Desenvolvimento pessoal</a>
                <a class="btn btn-light btn-sm mb-1" href="#">Acadêmico</a>
    
              </div>
            </div><!-- /.card -->
            <div class="car">
              <div class="card-body">
                <h4 class="card-title text-center">Mais lidas</h4>

                <a href="post-image.html" class="d-inline-block">
                  <h4 class="h6">Titulo do texto</h4>
                  <img class="card-img" src="<?= base_url("assests/img/img-blog/cat-4611189_1920.jpg")  ?>" alt="">
                  <p>Sub titulo bababs absjhasuj asjajshjas asjahsjasa...</p>
                </a>
                <time class="timeago" datetime="2019-10-03 20:00" timeago-id="6">2 julho 2019</time> em 
                <a href="#">Estilo de vida</a>
                <hr>
                
                <a href="post-image.html" class="d-inline-block">
                  <h4 class="h6">Titulo do texto</h4>
                  <img class="card-img" src="<?= base_url("assests/img/img-blog/cat-4611189_1920.jpg")  ?>" alt="">
                  <p>Sub titulo bababs absjhasuj asjajshjas huu ...</p>
                </a>
                <time class="timeago" datetime="2019-10-03 20:00" timeago-id="6">2 julho 2019</time> em 
                <a href="#">Estilo de vida</a>
                
              </div>
            </div><!-- /.card -->
          </aside>

           <aside class="si">
            <div class="car">
               <h4 class="card-title text-center">Compartilhe</h4>
              <div id="fb-root"></div>
              <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-size="small" style="margin: auto;"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore" >Compartilhar</a></div>
              <br>
              <div style="margin: auto;">
              <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button"  data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
              </div>
              <br>
              <script type="text/javascript" src="https://platform.linkedin.com/in.js"></script><script type="in/share" data-counter="top"></script>
            </div>
          </aside>


        </div>
      </div>
    
  
    </div>
   
  
  <div class="rodape cordepe">
       <?php $this->load->view("auxilio/footer"); ?>

  </div>
  
  
</div>
	
</body>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v5.0"></script>
</html>