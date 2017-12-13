<!DOCTYPE html>
<html>
    <head>
        <title>Mayoristas</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
            .boton {
                font-family: arial;
                color: white;
                background-color: gray;
                padding: 5px 10px;
                border-radius: 5px;
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Mayoristas</div>
            </div>
            <div>
                <a href="{{ asset('/auth/logout') }}" class="boton">Cerrar sesión</a>
            </div>
        </div>
    </body>
</html>
