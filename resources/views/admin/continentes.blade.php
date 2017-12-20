@extends('layout-login')

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
                    <h3>Continentes</h3>
                    <h4 style="margin-top: 20px">Nuevo continente</h4>
                    {!! Form::open(['method' => 'post', 'url' => route('admin.continente.store'), 'style' => 'margin-top: 20px']) !!}

                    <div class="form-group">
                        {!! Form::label('nombre', 'Nombre') !!}
                        {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('descripcion', 'Descripción') !!}
                        {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
                    </div>

                    {!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>

            </div>

            <div class="col-lg-4">

                <h3>Continentes registrados</h3>

                        <div class="table-responsive" style="margin-top: 30px">
                            <table class="table table-hover">
                                <tbody>
                                @foreach($continents as $continente)

                                    <tr>
                                        <td><strong>{!! $continente->nombre !!}</strong></td>
                                        <td class="text-right">
                                            <a href="{{ route('admin.continente.editar', $continente->id) }}" title="editar"><i class="fa fa-pencil"></i></a>
                                            <button class="text-danger" data-toggle="modal" data-target="#modalDeleteContinente{!! $continente->id !!}" style="border: none; background-color: white"><i class="fa fa-trash"></i> </button>
                                        </td>
                                        {{-- VENTANA MODAL DELETE CONTINENTE --}}
                                        <div class="modal fade" id="modalDeleteContinente{!! $continente->id !!}">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title">Eliminar continente:  "{!! $continente->nombre !!}"</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p class="text-red">¿Está seguro que desea eliminar el continente?</p>
                                                        <p>Si lo hace NO podrá deshacer la acción</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default pull-left cancelar" data-dismiss="modal">Cancelar</button>
                                                        {!! Form::open(['method' => 'DELETE', 'url' => route('admin.continente.delete', $continente->id)]) !!}
                                                        {!! Form::submit('Eliminar', ['class' => 'btn eliminar']) !!}
                                                        {!! Form::close() !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- FIN VENTANA MODAL DELETE CONTINENTE --}}
                                    </tr>

                                @endforeach
                                </tbody>
                            </table>
                        </div>

            </div>

        </div>
    </div>

@endsection