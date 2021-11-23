<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center  justify-content-center" style="background-color: green" href="<?= base_url('Administracao') ?>">
        <div class="sidebar-brand-icon">
          <img src="<?= base_url("assests/img/img-estilo/logo.png") ?>">
        </div>
        <div class="sidebar-brand-text ">Projeto Jovens integrais</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('Administracao') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Administração</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Projeto
      </div>
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
          aria-controls="collapseTable">
          <i class="fas fa-fw fa-users-cog"></i>
          <span>Perfil</span>
        </a>
        <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Perfil</h6>
            <a class="collapse-item" href="<?=base_url('Administracao/novocolaborador')?>">Alterar foto de perfil</a>
            <!-- <a class="collapse-item" href="<?= base_url('Administracao/gerenciarcola') ?>">Informações</a> -->
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsepar" aria-expanded="true"
          aria-controls="collapsepar">
          <i class="fas fa-fw fa-users"></i>
          <span>Conta</span>
        </a>
        <div id="collapsepar" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Conta</h6>
            <a class="collapse-item" href="<?= base_url('Administracao/gerenciarParticipante') ?>">Alterar senha</a>
            <a class="collapse-item" href="<?= base_url('Administracao/gerenciarParticipante') ?>">Alterar email</a>
            <a class="collapse-item" href="<?= base_url('Administracao/gerenciarParticipante') ?>">Alterar nome e sobrenome</a>
            <a class="collapse-item" href="<?= base_url('Administracao/gerenciarParticipante') ?>">Desetivar conta</a>



          </div>
        </div>
      </li>

  
        
    </ul>