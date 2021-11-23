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
  <link href="<?= url('assests/sistema/vendor/fontawesome-free/css/all.min.css')?> " rel="stylesheet" type="text/css">
  <link href="<?= url('assests/sistema/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css">
  <link href="<?= url('assests/sistema/css/ruang-admin.min.css')?>" rel="stylesheet">

</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    @include('auxilio.navadmum')
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        @include('auxilio.navadmdois')
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">



         <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dados do candidato</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item active"><a href="<?= url('Administracao') ?>">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?= url('Administracao/listadeespera') ?>">Lista de espera</a></li>
              <li class="breadcrumb-item active" aria-current="page">Dados do candidato</li>

            </ol>
          </div>
         <div class="card mb-4">
                <div class="card-body">
                  <h1>Dados do candidato</h1><hr><hr><hr>
                  <h1>Informações básicas</h1>
                  <p class="h5">Data de nascimento: 08/12/1880</p>
                   <p class="h5">Nome: Edu s Silva</p>

                    <p class="h5">E-mail: edu@silva.com</p>
                    <h1>Dados pessoais</h1>
                    <p class="h5">Nacionalidade: Brasileiro </p>
                      <p class="h5">Estado civil: Na pista pra negocio</p>
                    <p class="h5">telefone: (11)1111-1111</p>
                    <hr>


                  <h1>Dados do responsável</h1>

                      <p class="h5">Nome: Mada</p>
                    {{-- <p class="h5">CPF: '. htmlspecialchars($familia['cpf']).'</p> --}}
                    <p class="h5">Data de nascimento: 08/12/1880</p>
                    <p class="h5">Telefone: (11) 1 1111-1111</p>
                      <p class="h5">Parentesco: mãe</p><hr>



                 <h1>Dados do profissionais</h1>
                    <p class="h5">Situação atual: Trabalhando</p>

                    <p class="h5">Cargo: estagiario</p>

                    <p class="h5">Qual foi o seu último cargo: null</p>
                    <p class="h5">Renda: 3,0000</p>
                    <p class="h5">Qauntidades de pessoas que moram na sua casa: 5</p>
                    <p class="h5">Com quem mora atualmente: com os pais</p>
                    <hr>
                  <h1>Endereço</h1>
                    <p class="h5">CEP: 00000000</p>

                    <p class="h5">Rua: dos bobos</p>

                    <p class="h5">Bairro: Bairro de gente bonita</p>

                    <p class="h5">Cidade: da lua</p>
                    <p class="h5">Estado: Buraco 27</p>
                    <p class="h5">Número: 0</p>
                    <hr>




                  <h1>Dados escolares</h1>
                    <p class="h5">Escolaridade: Graduação cursando</p>
                    <p class="h5">Período: noturno</p>
                    <p class="h5">Curso que faz atualmente: Adm</p>
                    <hr>

                 <h1>Avaliação parte 1</h1>
                      <p class="h5">Conte uma história de superação (desafio) que você já viveu<br> </p>
                      <div  class="p-2 border border-success">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed libero sit amet elit lacinia scelerisque non nec neque. Donec in sollicitudin augue. Nunc scelerisque lacinia sapien, id porttitor leo porta pharetra. Donec nec efficitur erat. Mauris porttitor, eros eu vestibulum pellentesque, lorem eros dictum felis, in porta lorem erat vehicula justo. Suspendisse potenti. Curabitur orci dolor, aliquet vel libero nec, vulputate sagittis tellus. Nullam nec purus odio. Phasellus quis mi neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut condimentum nisi eu eleifend luctus. Cras vitae erat dui. Praesent eu vulputate nisi.

                        Quisque non rutrum justo. Maecenas eu ultrices mauris. Nam interdum dignissim lacinia. Maecenas sit amet ante magna. Etiam interdum, leo et pretium cursus, sem enim facilisis tortor, pharetra aliquet lacus elit eget lacus. Cras volutpat libero at iaculis scelerisque. Phasellus sagittis metus sed mi auctor, ut elementum turpis fringilla. Ut faucibus neque id orci porttitor auctor. Integer non enim tortor. Ut enim sapien, suscipit tempus lacus sit amet, malesuada accumsan purus. Quisque id est ligula.
                      </div>
                        <p class="h5 mt-4">Conte uma história que te deixou feliz (motivado, empolgado, etc.).<br> </p>
                      <div  class="p-2 border border-success">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed libero sit amet elit lacinia scelerisque non nec neque. Donec in sollicitudin augue. Nunc scelerisque lacinia sapien, id porttitor leo porta pharetra. Donec nec efficitur erat. Mauris porttitor, eros eu vestibulum pellentesque, lorem eros dictum felis, in porta lorem erat vehicula justo. Suspendisse potenti. Curabitur orci dolor, aliquet vel libero nec, vulputate sagittis tellus. Nullam nec purus odio. Phasellus quis mi neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut condimentum nisi eu eleifend luctus. Cras vitae erat dui. Praesent eu vulputate nisi.

                        Quisque non rutrum justo. Maecenas eu ultrices mauris. Nam interdum dignissim lacinia. Maecenas sit amet ante magna. Etiam interdum, leo et pretium cursus, sem enim facilisis tortor, pharetra aliquet lacus elit eget lacus. Cras volutpat libero at iaculis scelerisque. Phasellus sagittis metus sed mi auctor, ut elementum turpis fringilla. Ut faucibus neque id orci porttitor auctor. Integer non enim tortor. Ut enim sapien, suscipit tempus lacus sit amet, malesuada accumsan purus. Quisque id est ligula.
                      </div>
                      <hr>


                      <h1>Avaliação parte 2</h1>
                      <p class="h5">Em caso de necessidade, com quem você pode contar?<br> </p>
                      <div  class="p-2 border border-success">
                        seus pais, amigos, membros da igreja
                    </div>
                        <p class="h5 mt-4">O que você mudaria na sua comunidade (escola, bairro, rua), qual seria seu papel nessa mudança<br> </p>
                      <div  class="p-2 border border-success">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed libero sit amet elit lacinia scelerisque non nec neque. Donec in sollicitudin augue. Nunc scelerisque lacinia sapien, id porttitor leo porta pharetra. Donec nec efficitur erat. Mauris porttitor, eros eu vestibulum pellentesque, lorem eros dictum felis, in porta lorem erat vehicula justo. Suspendisse potenti. Curabitur orci dolor, aliquet vel libero nec, vulputate sagittis tellus. Nullam nec purus odio. Phasellus quis mi neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut condimentum nisi eu eleifend luctus. Cras vitae erat dui. Praesent eu vulputate nisi.

                        Quisque non rutrum justo. Maecenas eu ultrices mauris. Nam interdum dignissim lacinia. Maecenas sit amet ante magna. Etiam interdum, leo et pretium cursus, sem enim facilisis tortor, pharetra aliquet lacus elit eget lacus. Cras volutpat libero at iaculis scelerisque. Phasellus sagittis metus sed mi auctor, ut elementum turpis fringilla. Ut faucibus neque id orci porttitor auctor. Integer non enim tortor. Ut enim sapien, suscipit tempus lacus sit amet, malesuada accumsan purus. Quisque id est ligula.
                      </div>
                      <hr>






                        <button type="button" class="btn btn-primary mb-5" data-toggle="modal" data-target="#exampleModal">
  Marcar entrevista com candidato
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Marcar entrevista com candidato</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="" action="'.url('Administracao/marcarEntervista').'" method="post">
      <input type="hidden" value="'.$idUSu ?? ''.'" name="idusuario">

      <div class="modal-body">
        <label>Data da entrevista</label>
        <input class="form-control" name="data" type="date">
        <label>Horário da entrevista</label>
        <br>
        <select name="hora">
          <option value="00">00</option>
          <option value="01">01</option>
          <option value="02">02</option>
          <option value="03">03</option>
          <option value="04">04</option>
          <option value="05">05</option>
          <option value="06">06</option>
          <option value="07">07</option>
          <option value="08">08</option>
          <option value="09">09</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
          <option value="21">21</option>
          <option value="22">22</option>
          <option value="23">23</option>
          <option value="24">24</option>
        </select>:
        <select name="minuto" >
          <option value="00">00</option>
          <option value="01">01</option>
          <option value="02">02</option>
          <option value="03">03</option>
          <option value="04">04</option>
          <option value="05">05</option>
          <option value="06">06</option>
          <option value="07">07</option>
          <option value="08">08</option>
          <option value="09">09</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
          <option value="21">21</option>
          <option value="22">22</option>
          <option value="23">23</option>
          <option value="24">24</option>
          <option value="25">25</option>
          <option value="26">26</option>
          <option value="27">27</option>
          <option value="28">28</option>
          <option value="29">29</option>
          <option value="30">30</option>
          <option value="31">31</option>
          <option value="32">32</option>
          <option value="33">33</option>
          <option value="34">34</option>
          <option value="35">35</option>
          <option value="36">36</option>
          <option value="37">37</option>
          <option value="38">38</option>
          <option value="39">39</option>
          <option value="40">40</option>
          <option value="41">41</option>
          <option value="42">42</option>
          <option value="43">43</option>
          <option value="44">44</option>
          <option value="45">45</option>
          <option value="46">46</option>
          <option value="47">47</option>
          <option value="48">48</option>
          <option value="49">49</option>
          <option value="50">50</option>
          <option value="51">51</option>
          <option value="52">52</option>
          <option value="53">53</option>
          <option value="54">54</option>
          <option value="55">55</option>
          <option value="56">56</option>
          <option value="57">57</option>
          <option value="58">58</option>
          <option value="59">59</option>
        </select>
        <br>
      </div>
      <div class="modal-footer">
      <button class="btn btn-info ">Marca entervista</button>

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
      </form>

    </div>
  </div>

</div>

 <!-- Modal para desclassificar o candidato  -->
<button type="button" class="btn btn-secondary mb-5" data-toggle="modal" data-target="#des">
  Reprovar condidato
</button>

<!-- Modal -->
<div class="modal fade" id="des" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Reprovar candidato</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="prala.php" method="post">
      <div class="modal-body">

        <h5>Confirme para reprovar o candidato</h5>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

                </div>
              </div>

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

  <script src="<?= url('assests/sistema/vendor/jquery/jquery.min.js')?>"></script>
  <script src="<?= url('assests/sistema/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
  <script src="<?= url('assests/sistema/vendor/jquery-easing/jquery.easing.min.js')?>"></script>
  <script src="<?= url('assests/sistema/js/ruang-admin.min.js')?>"></script>
  <script src="<?= url('assests/sistema/vendor/chart.js/Chart.min.js')?>"></script>
  <script src="<?= url('assests/sistema/vendor/chart.js/Chart.min.js')?>"></script>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->

</body>

</html>
