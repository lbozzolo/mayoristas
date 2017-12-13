@extends('layout-login')

@section('body')

    <div class="row">
        <div style="padding: 30px 100px">
            <h2 style="margin-bottom: 20px"><img src="{{ asset('img/logo.png') }}" style="background-color: gray; padding: 10px; margin-right: 20px; border-radius: 5px"> Admin panel</h2><hr>
            <div class="col-lg-1">

                @include('admin.partials.nav')

            </div>
            <div class="col-lg-7">

                <div id="seleccionContinente">
                    <h3>Seleccione el continente</h3>
                    <ul class="list-unstyled" style="margin-top: 30px">
                       @foreach($continentes as $id => $continente)
                           <li data-id="{!! $id !!}" class="continentes btn btn-default">
                               <a href="">{!! $continente !!}</a>
                           </li>
                       @endforeach
                    </ul>
                </div>

                <div style="padding: 0px 50px; display:none" id="formularioOpciones">
                    <h3 id="h3opciones"></h3>
                    {!! Form::open(['method' => 'post', 'url' => '', 'style' => 'margin-top: 30px']) !!}

                    <div class="form-group">
                        {!! Form::label('paquetes', '', ['id' => 'labelPaquetes']) !!}
                        <select class="form-control" id="selectPaquetes">
                            @foreach($paquetes['Africa'] as $paquete)
                                <option value="{!! $paquete->id !!}">{!! $paquete->descripcion !!}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        {!! Form::label('nombre', 'Nombre') !!}
                        {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('descripcion', 'Descripción') !!}
                        {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
                    </div>

                    {!! Form::submit('Guardar cambios', ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>

            </div>

            <div class="col-lg-4"></div>

        </div>
    </div>

@endsection

@section('js')

    <script type="text/javascript">

        $('.continentes').click(function () {
            var continenteId = $(this).attr('data-id');
            var continente = $(this).html();
            $('#h3opciones').html(continente + ' - Opciones de paquetes');
            $('#labelPaquetes').html('Paquetes de ' + continente);
            $('#seleccionContinente').hide();
            $('#formularioOpciones').show();
        });

    </script>

@endsection