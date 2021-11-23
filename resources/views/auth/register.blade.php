@php
    $titulo = 'Cadastro'
@endphp
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
<script src="https://apis.google.com/js/platform.js" async defer></script>
<meta name="google-signin-client_id" content="1047047902076-oi0l37m2c1rp8e54p335q7ml40cocmhp.apps.googleusercontent.com">


    <!-- <link rel="shortcut icon" type="text/css" href="<?= url('assests/img/5stdy_logo.png')?>"> -->
</head>
<body>

    <div class="tudo">

  <div id="topo" >
    @include('nav')
</div>




  <div  class="conteudo">
    <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block text-center">
            <br><br><br>
            <p class="display-4">Projeto</p>
            <p class="display-4">Jovens</p>
            <p class="display-4">Integrais</p>
          </div>
          <div class="col-lg-7 ">
              @php
                  $turmaAtiva = app('FacadesTurma')->retonarTurmaAtiva();
              @endphp
              @if ($turmaAtiva)

            @if (app('Data_atual') < $turmaAtiva->data_fim_da_inscricao)


            <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Cadastro na turma {{$turmaAtiva->nome}}</h1>
                    <small class="h6 text-gray-900 mb-4">Inscrições até: {{$turmaAtiva->data_fim_da_inscricao}}</small>
                  </div>
                  <form method="POST" action="{{  route('register')  }}" id="form">
                    @csrf

                    <div class="form-group ">
                        <label for="name" class="">{{ __('Nome Completo') }}</label>

                            <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>

                    <div class="form-group ">
                        <label for="email" class="">{{ __('E-Mail') }}</label>

                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>

                    <div class="form-group">
                        <label for="password" class="">{{ __('Senha') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>

                    <button href="#" class="btn btn-primary btn-user btn-block">
                      Cadastro
                    </button>
                    <hr>
                     {{-- <a href="#" class="btn btn-google btn-user btn-block">
                      <i class="fab fa-google fa-fw"></i> Login com Google
                    </a> --}}
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="{{ route('password.request') }}">
                        {{ __('Esqueceu sua senha?') }}
                    </a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="<?= url('register') ?>">Cadastre-se no Projeto</a>
                  </div>
                </div>

                @endif

                @else

              @endif

              <form method="POST" action="{{  route('register')  }}" id="form">
                @csrf

                <div class="form-group ">
                    <label for="name" class="">{{ __('Nome Completo') }}</label>

                        <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                </div>

                <div class="form-group ">
                    <label for="email" class="">{{ __('E-Mail') }}</label>

                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                </div>

                <div class="form-group">
                    <label for="password" class="">{{ __('Senha') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                </div>

                <button href="#" class="btn btn-primary btn-user btn-block">
                  Cadastro
                </button>
                <hr>
                 {{-- <a href="#" class="btn btn-google btn-user btn-block">
                  <i class="fab fa-google fa-fw"></i> Login com Google
                </a> --}}
              </form>
        </div>
      </div>
    </div>

  </div>

  </div>


  <div class="rodape cordepe">
    @include("auxilio/footer")
  </div>


</div>
<script type="text/javascript">
    $("#form").validate({
    rules : {
          email:{
                 required:true,
                 minlength: 5
          },
          password:{
             required: true,
             minlength: 5
          }
    },
             errorElement: "em",
             errorPlacement: function ( error, element ) {
                 // Add the `invalid-feedback` class to the error element
                 error.addClass( "invalid-feedback" );

                 if ( element.prop( "type" ) === "checkbox" ) {
                     error.insertAfter( element.next( "label" ) );
                 } else {
                     error.insertAfter( element );
                 }
             },
             highlight: function ( element, errorClass, validClass ) {
                 $( element ).addClass( "is-invalid" ).removeClass( "is-valid" );
             },
             unhighlight: function (element, errorClass, validClass) {
                 $( element ).addClass( "is-valid" ).removeClass( "is-invalid" );
             }
});
</script>
</body>
</html>



{{-- <!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Cadastro de usuário</title>
    <link rel="stylesheet" href='{{ url("assests/css/estilo.css") }}'>


    <link rel="stylesheet" href='{{ url("assests/bootstrap/css/bootstrap.min.css") }}'>


    <script src="{{url('assests/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{url('assests/js/jquery.min.js')}}"></script>


</head>

<body>
    <div class="tudo">

        <div id="topo">

            @include("complemento/nav")


        </div>

        <div class="conteudo">
            <div class="container ajux">

                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <section class="mt-5">
                        <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Manter conexão') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Esqueceu sua senha?') }}
                                        </a>
                                        @endif


                                    </div>
                                </div>




                            </form>

                        </section>
                    </div>


                </div>



            </div>


        </div>

        <div class="rodape">
            @include("complemento/footer")
        </div>

    </div>
</body>

</html> --}}
