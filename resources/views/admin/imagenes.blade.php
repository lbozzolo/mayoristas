@extends('layout-login')

@section('body')

    <div class="row">
        <div style="padding: 30px 10%">

            @include('admin.partials.head')

            <div class="col-lg-1">

                @include('admin.partials.nav')

            </div>
            <div class="col-lg-7 col-xs-12" style="margin-bottom: 30px">

                <span style="padding: 0px 50px">
                    @include('partials.messages')
                    <h3>Imágenes</h3>



                    <ul class="list-unstyled">
                    @foreach($continents as $continent)

                        @if($continent->nombre != 'Home')

                            @if(count($continent->images) > 0)
                                <li class="list-group-item">
                                    <h4 class="text-info" style="margin-bottom: 5px">{!! $continent->nombre !!}</h4>
                                    @if(count($continent->images) < 4)

                                    <a href="#" class="text-success pull-right foto"  id="agregarFoto{!! $continent->id !!}" title="Agregar foto"><i class="fa fa-plus"></i> </a>
                                    <div class="formularioFoto" style="display: none; margin: 5px">


                                        {!! Form::open(['url' => route('admin.image.store', $continent->id), 'method' => 'post', 'class' => 'form', 'enctype' => 'multipart/form-data']) !!}

                                        <div class="input-group input-group-sm">
                                            {!! Form::file('img', ['class' => 'form-control inputImage']) !!}
                                            <span class="input-group-btn">
                                                {!! Form::submit('Subir', ['class' => 'btn btn-info btn-flag']) !!}
                                            </span>
                                        </div>

                                        {!! Form::close() !!}

                                    </div>

                                    @endif
                                    <ul class="list-unstyled list-inline">
                                    @foreach($continent->images as $imagen)
                                        @if(count($continent->images) > 0)
                                            <li>
                                                <span style="display: inline-block{!! ($imagen->principal == 1)? '; border: 3px solid #1ABC9C' : '' !!}">
                                                    <img src="{{ route('admin.ver.image', $imagen->path) }}" height="80px">
                                                </span>
                                                <span style="display: inline-block">
                                                    <button class="btn btn-default btn-xs" style="width: 100%" title="Eliminar foto" data-toggle="modal" data-target="#modalDeleteImage{!! $imagen->id !!}"><i class="fa fa-trash"></i> </button>
                                                    {{-- VENTANA MODAL DELETE IMAGEN --}}
                                                    <div class="modal fade" id="modalDeleteImage{!! $imagen->id !!}">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span></button>
                                                                    <h4 class="modal-title">Eliminar imagen</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p class="text-red">¿Está seguro que desea eliminar la imagen?</p>
                                                                    <p>Si lo hace NO podrá deshacer la acción</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default pull-left cancelar" data-dismiss="modal">Cancelar</button>
                                                                    {!! Form::open(['method' => 'DELETE', 'url' => route('admin.image.delete', $imagen->id)]) !!}
                                                                    {!! Form::submit('Eliminar', ['class' => 'btn eliminar']) !!}
                                                                    {!! Form::close() !!}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- FIN VENTANA MODAL DELETE IMAGEN --}}
                                                    @if($imagen->principal == 0)
                                                        <a href="{{ route('admin.image.principal', $imagen->id) }}" class="btn btn-default btn-xs" title="Marcar como principal" style="display: block"><i class="fa fa-check"></i></a>
                                                    @else
                                                        <a href="#" class="btn btn-default btn-xs" disabled title="Marcar como principal" style="display: block"><i class="fa fa-check"></i></a>
                                                    @endif
                                                </span>
                                            </li>
                                        @endif
                                    @endforeach
                                    </ul>

                                </li>
                            @else
                                <li class="list-group-item">
                                    <strong>{!! $continent->nombre !!}</strong>
                                    <a href="#" class="text-success pull-right foto"  id="agregarFoto{!! $continent->id !!}" title="Agregar foto"><i class="fa fa-plus"></i> </a>

                                    <div class="formularioFoto" style="display: none; margin: 5px">

                                        {!! Form::open(['url' => route('admin.image.store', $continent->id), 'method' => 'post', 'class' => 'form', 'enctype' => 'multipart/form-data']) !!}

                                        <div class="input-group input-group-sm">
                                            {!! Form::file('img', ['class' => 'form-control inputImage']) !!}
                                            <span class="input-group-btn">
                                                {!! Form::submit('Subir', ['class' => 'btn btn-info btn-flag']) !!}
                                            </span>
                                        </div>

                                        {!! Form::close() !!}

                                    </div>
                                    <small class="text-muted">(todavía no hay fotos en este continente)</small>
                                </li>
                            @endif

                        @else

                            @include('admin.partials.images-home')

                        @endif

                    @endforeach

                    </ul>

                </div>

            </div>

            <div class="col-lg-4"></div>

        </div>
    </div>

@endsection

@section('js')

    <script>

        $('.foto').click(function (ev) {
            ev.preventDefault();

            $('.list-group-item').css('border-left', '1px solid lightgray');
            $(this).parent().css('border-left', '2px solid #1ABC9C');
            $('.formularioFoto').hide();
            $('.inputImage').val('');
            $(this).next().show();

        })

    </script>

@endsection