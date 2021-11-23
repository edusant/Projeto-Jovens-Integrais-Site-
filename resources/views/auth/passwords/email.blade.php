@php
    $titulo = 'Resetar senha';
@endphp
<!DOCTYPE html>
<html lang="pt-br">

<head>
    @include("complemento/estilos")


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
                            <div class="card">
                                <div class="card-header">{{ __('Resetar senha') }}</div>

                                <div class="card-body">
                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif

                                    <form method="POST" action="{{ route('password.email') }}">
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

                                        <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Enviar código para o email') }}
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
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

</html>
