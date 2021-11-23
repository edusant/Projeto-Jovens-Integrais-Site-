 <style>
   .cor{
    background-color: #07713B
   }
 </style>
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light cor topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
  
    
            <li class="nav-item dropdown no-arrow mx-1">
            </li>
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="<?= base_url("assests/img/img-usuario/p.jpg")  ?>" style="max-width: 60px">
                <span class="ml-2 d-none d-lg-inline text-white small">Administradora Chefe</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Meu perfil
                </a>
                <a class="dropdown-item" href="<?= base_url('Usuario/minhaconta') ?>">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Configurações
                </a>
                <script>
  function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
    });
  }
</script>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= base_url('Usuario/sair') ?>">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400" onclick="signOut()"></i>
                    Sair
                </a>
              </div>
            </li>
          </ul>
        </nav>