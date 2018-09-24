<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Syllabus5</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
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
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .unidades {
                border: 1px solid black;
            }

            .col-2, .col-3,  .col-4,
            {
                margin-left: 0px;
            }

        </style>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    SYLLABUS
                </div>

                <div class="links">
                    <a href="http://syllabus.test/show/20181/100048">Visualizar</a><br>
                    <a href="http://syllabus.test/PDF/20181/100048/screen">PDF En pantalla</a><br> 
                    <a href="http://syllabus.test/PDF/20181/100048/download">PDF Descarga</a><br>
                    <a href="http://syllabus.test/PDF/20181/100048/tests">PDF Test</a><br>
                    <!--a href="http://syllabus.test/PDFdompdf">PDF dompdf</a><br>
                    <a href="http://syllabus.test/PDFshowSimple">Show simple page</a><br>
                    <a href="http://syllabus.test/PDFSimple">PDF simple page</a><br>
                    <a href="http://syllabus.test/PDFshowExample">Show example-component</a><br>
                    <a href="http://syllabus.test/PDFexample">PDF example-component</a><br-->
                </div>
            </div>
        </div>
        <table>
            <thead>
                <tr class="row">
                    <th class="col-1 col-xs-1 unidades">Semana</th>
                    <th class="col-2 col-xs-4 unidades">Texto</th>
                    <th class="col-3 col-xs-4 unidades">Logro</th>
                    <th class="col-4 col-xs-2 unidades">Acción</th>
                </tr>
            </thead>
            <tbody>
                <tr class="row">
                    <td class="col-1 col-xs-1 unidades">data</td>
                    <td class="col-2 col-xs-4 unidades">data</td>
                    <td class="col-3 col-xs-4 unidades">data</td>
                    <td class="col-4 col-xs-2 unidades">data</td>
                </tr>
            </tbody>
        </table>
    </body>
</html>

