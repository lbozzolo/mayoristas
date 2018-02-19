@extends('layout-login')

@section('css')

    <style type="text/css">

        .home{
            background-color: beige;
            padding: 20px 40px;
            margin-top: 20px;
            box-shadow: 8px 8px 10px lightgrey;
        }
        .home h1{
            font-size: 1.5em;
            margin-bottom: 10px;
        }

    </style>

@endsection

@section('body')

    <div class="row">
        <div style="padding: 30px 10%">

            @include('admin.partials.head')

            <div class="col-lg-1">

                @include('admin.partials.nav')

            </div>
            <div class="col-lg-7 col-xs-12" style="margin-bottom: 30px">

                <div style="padding: 0px 50px">
                    @include('partials.messages')
                    <h3>Home</h3>

                    @if($paquete)

                        <h4 style="margin-top: 20px">Home actual</h4>
                        <article class="home">
                            <a href="{{ route('admin.paquete.editar', $paquete->id) }}" title="editar home" class=" pull-right"><i class="fa fa-pencil"></i> </a>
                            <h1>{!! $paquete->nombre !!}</h1>
                            <p>
                                {!! $paquete->descripcion !!}
                            </p>
                        </article>

                    @else

                        <h4 style="margin-top: 20px">Nueva 'Home'</h4>
                            <div style="margin-top: 30px">
                                {!! Form::open(['method' => 'post', 'url' => route('admin.paquete.store'), 'style' => 'margin-top: 20px', 'enctype' => 'multipart/form-data']) !!}

                                {!! Form::hidden('continente_id', $home->id, null, ['class' => 'form-control']) !!}
                                <div class="form-group">
                                    {!! Form::label('nombre', 'Título') !!}
                                    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('descripcion', 'Descripción') !!} (máximo 500 caracteres)
                                    {!! Form::textarea('descripcion', null, ['class' => 'form-control', 'rows' => '8', 'style' => 'margin-bottom: 10px']) !!}
                                </div>

                                {!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}
                                <a href="{{ URL::previous() }}" class="btn cancelar">Cancelar</a>
                                {!! Form::close() !!}
                            </div>

                    @endif
                    {{--
                    <div style="margin: 20px 0px">
                        <a href="{{ route('admin.paquete.editar', $paquete->id) }}" title="editar home" class="primario">Editar</a>
                    </div>
                    --}}
                    {{--

                    {!! Form::open(['method' => 'post', 'url' => route('admin.paquete.store'), 'style' => 'margin-top: 20px', 'enctype' => 'multipart/form-data']) !!}

                    {!! Form::hidden('continente_id', $home, null, ['class' => 'form-control']) !!}

                    <div class="form-group">
                        {!! Form::label('nombre', 'Título') !!}
                        {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('descripcion', 'Descripción ') !!} (máximo 500 caracteres)
                        {!! Form::textarea('descripcion', null, ['class' => 'form-control', 'rows' => '8', 'style' => 'margin-bottom: 10px']) !!}
                    </div>

                    {!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}

                    --}}

                </div>

            </div>

            <div class="col-lg-4">
                {{--
                <h3>Variantes almacenadas</h3>

                <ul class="list-unstyled" style="margin-top: 30px">
                    @foreach($continents as $continent)


                        @if(count($continent->paquetes) != 0)
                            @if($continent->nombre == 'Home')

                            <li>
                                <strong>{!! $continent->nombre !!}</strong>

                                @if(count($continent->paquetes) != 0)
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <tbody>
                                            @foreach($continent->paquetes as $paquete)
                                                <tr>
                                                    <td>{!! $paquete->nombre !!}</td>
                                                    <td class="text-right" width="100">
                                                        <a href="{{ route('admin.paquete.editar', $paquete->id) }}" title="editar"><i class="fa fa-pencil"></i></a>
                                                        <button class="text-danger" data-toggle="modal" data-target="#modalDeletePaquete{!! $paquete->id !!}" style="border: none; background-color: white"><i class="fa fa-trash"></i> </button>
                                                    </td>

                                                    <div class="modal fade" id="modalDeletePaquete{!! $paquete->id !!}">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span></button>
                                                                    <h4 class="modal-title">Eliminar variante:  "{!! $paquete->descripcion !!}"</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p class="text-red">¿Está seguro que desea eliminar la variante de Home?</p>
                                                                    <p>Si lo hace NO podrá deshacer la acción</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default pull-left cancelar" data-dismiss="modal">Cancelar</button>
                                                                    {!! Form::open(['method' => 'DELETE', 'url' => route('admin.paquete.delete', $paquete->id)]) !!}
                                                                    {!! Form::submit('Eliminar', ['class' => 'btn eliminar']) !!}
                                                                    {!! Form::close() !!}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                @endif

                            </li>

                            @endif
                        @endif

                    @endforeach
                </ul>
                --}}
            </div>

        </div>
    </div>

@endsection