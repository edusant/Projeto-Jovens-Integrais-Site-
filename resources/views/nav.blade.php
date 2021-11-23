<!-- <div id="m">
 <span class="navbar navbar-expand navbar-light container">

  <a class="navbar-brand" href="<?= url('') ?>"><img width="50%" src="<?= url("assests/img/img-estilo/logo.png") ?>"></a>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
         <a href="<?= url('usuario/login') ?>" class="h5 nav-link btn btn btn-outline-info">Login </a>
      </li>

      <li class="nav-item">
      <a href="<?= url('candidato/inscrevase') ?>" class="h5 nav-link">Cadastro</a>
      </li>

    </ul>


      </div>




</span>  -->



<!-- <div class="container">
  <img width="130px" src="<?= url("assests/img/img-estilo/logo.png") ?>">
  <a href="#" class="text-center"> Login</a>
</div>
 -->
<nav class="navbar navbar-expand-lg navbar-dark menu py-lg-4" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="<?= url('') ?>"><img width="70%" src="<?= url("assests/img/img-estilo/logo.png") ?>"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">

          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded h5 text-white" href="<?= route('QuemSomos')  ?>">Quem somos</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded h5 text-white" href="<?= route("Institucional.doacoes")?>">Contribua</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded h5 text-white" href="<?= route("Contato")?>">contato</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded h5 text-white" href="<?= url('login') ?>">Login</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase btn bg-white text-dark text-expanded " href="<?= url('register') ?>">cadastro</a>
          </li>


        </ul>
      </div>
      </div>
  </nav>

</div>
