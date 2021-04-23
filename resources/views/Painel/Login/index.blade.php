<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Conserta Palmas</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                /*background-image: url("{{ asset('AdminLTE/dist/img/background.jpg')}}");*/
                background-size: contain;
                background-position: center;
                background-size: 100%;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md" style="color: black;">
                    Conserta Palmas
                </div>

                <div class="links">

                    {{-- FAZER VERIFICAÇÃO SE ESTIVER LOGADO NO SISTEMA --}}
                    <a href="{{ route('Painel.index')}}">Entrar</a>
                    <a href="{{ route('Autenticacao.login')}}">Logar</a>
                    <a href="{{ route('Autenticacao.registro')}}">Registrar-se</a>
                </div>
            </div>
        </div>
    </body>
</html>

{{-- SEM UTILIZAÇÃO DESTA PAGINA --}}
