@extends('base')

@section('css')

    <style type="text/css">

        .texto-home{
            font-size: 1.8em;
            color: black;
            line-height: 1.2em;
        }
        h2{
            color: #0f3e68;
            font-size: 3em;
        }
        h2 span{
            font-size: 0.8em;
        }

    </style>

@endsection

@section('contenido')

    <div class="row">

        @foreach($home->images as $imagen)
            @if($imagen->principal == 1)
                <img src="{{ route('admin.ver.image', $imagen->path) }}" alt="" class="img-responsive">
            @endif
        @endforeach
        <div class="container" style="padding: 70px 100px; background-color: white">

            <p class="lead">Bienvenidos a:</p>
            @if(isset($home) && $home != null)

                <h2>{!! $home->nombre !!}</h2>
                <div style="margin: 20px 0px 100px 0px">
                    <p class="texto-home">
                        {!! $home->descripcion !!}
                    </p>
                </div>

            @else

                <h2>ELYSIUM TRAVEL <span>(DIVISION AGENCIAS DE VIAJE)</span></h2>
                <div style="margin: 20px 0px 100px 0px">
                    <p class="texto-home">Aquí encontrás toda nuestra programación de DESTINOS EXOTICOS y EVENTOS DEPORTIVOS.</p>
                    <p class="texto-home">
                        Contamos con Staff especializado y capacitado con más de 10 años de experiencia en la comercialización de estos productos,
                        la cual nos permite ofrecer el respaldo necesario para que puedan ofrecer nuestros productos a sus clientes con absoluta confianza.<br>
                        En ELYSIUM TRAVEL Desarrollamos propuestas creativas y de valor para que cada propuesta sea una experiencia inolvidable para
                        sus clientes.
                    </p>
                </div>

            @endif

        </div>

    </div>

@endsection