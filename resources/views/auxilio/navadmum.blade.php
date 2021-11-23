<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center  justify-content-center" style="background-color: green" href="<?= url('Administracao') ?>">
        <div class="sidebar-brand-icon">
          <img src="<?= url("assests/img/img-estilo/logo.png") ?>">
        </div>
        <div class="sidebar-brand-text ">Projeto Jovens integrais</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="<?= url('Administracao') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Administração</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Projeto
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
          aria-expanded="true" aria-controls="collapseBootstrap">
          <i class="far fa-fw fa-window-maximize"></i>
          <span>Gerenciar turmas</span>
        </a>
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Gerenciar turmas</h6>
            <a class="collapse-item" href="<?=url('Administracao/listadeespera')?>">Lista de espera</a>
            <a class="collapse-item" href="<?=url('Administracao/CandiPerentre')?>">Lista da entrevista</a>
            <a class="collapse-item" href="<?= url('Administracao/abrirturma') ?>">Abrir turmas</a>
            <a class="collapse-item" href="<?= url('Administracao/gerenciarTurma') ?>">Gerenciar turmas</a>
            <a class="collapse-item" href="<?=url('Administracao/lista')?>">Solicitação de almoço</a>
            <a class="collapse-item" href="<?= url('Administracao/analisedados')?>">Análise de dados</a>
            <a class="collapse-item" href="<?= url('Administracao/gerenciaraulas') ?>">Gerenciar aulas</a>

          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
          aria-controls="collapseTable">
          <i class="fas fa-fw fa-users-cog"></i>
          <span>Colaboradores</span>
        </a>
        <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Colaboradores</h6>
            <a class="collapse-item" href="<?=url('Administracao/novocolaborador')?>">Adicionar colaborador</a>
            <a class="collapse-item" href="<?= url('Administracao/gerenciarcola') ?>">Gerenciar contas</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsepar" aria-expanded="true"
          aria-controls="collapsepar">
          <i class="fas fa-fw fa-users"></i>
          <span>Participantes</span>
        </a>
        <div id="collapsepar" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Participante</h6>
            <a class="collapse-item" href="<?= url('Administracao/gerenciarParticipante') ?>">Gerencair contas</a>
          </div>
        </div>
      </li>


        <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseblog" aria-expanded="true"
          aria-controls="collapseblog">
          <i class="fas fa-fw fa-blog"></i>
          <span>Blog</span>
        </a>
        <div id="collapseblog" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Blog</h6>
            <a class="collapse-item" href="simple-tables.html">Gerencair blog</a>
          </div>
        </div>
      </li>
    </ul>
