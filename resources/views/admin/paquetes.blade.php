@extends('layout-login')

@section('body')

    <div class="row">
        <div style="padding: 30px 10%">

                @include('admin.partials.head')

            <div class="col-lg-1 col-xs-12">

                @include('admin.partials.nav')

            </div>
            <div class="col-lg-7 col-xs-12" style="margin-bottom: 30px">

                <div style="padding: 0px 50px">

                    @include('partials.messages')

                    <h3>Paquetes</h3>
                    <h4 style="margin-top: 20px">Nuevo paquete</h4>
                    {!! Form::open(['method' => 'post', 'url' => route('admin.paquete.store'), 'style' => 'margin-top: 20px', 'enctype' => 'multipart/form-data']) !!}

                    <div class="form-group">
                        {!! Form::label('continente_id', 'Continente') !!}
                        {!! Form::select('continente_id', $continentes, null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('descripcion', 'Descripción del paquete') !!}
                        {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('pdf_file', 'Archivo PDF') !!}
                        {!! Form::file('pdf_file', ['class' => 'form-control']) !!}
                    </div>

                    {!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>

            </div>

            <div class="col-lg-4 col-xs-12">

                <h3>Paquetes existentes</h3>
                <ul class="list-unstyled" style="margin-top: 30px">
                @foreach($continents as $continent)

                    @if(count($continent->paquetes) != 0)
                        <li>
                            <strong>{!! $continent->nombre !!}</strong>

                            @if(count($continent->paquetes) != 0)
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <tbody>
                                        @foreach($continent->paquetes as $paquete)
                                            <tr>
                                                <td>{!! $paquete->descripcion !!}</td>
                                                <td class="text-right" width="100">
                                                    <a href="{{ route('admin.paquete.editar', $paquete->id) }}" title="editar"><i class="fa fa-pencil"></i></a>
                                                    <button class="text-danger" data-toggle="modal" data-target="#modalDeletePaquete{!! $paquete->id !!}" style="border: none; background-color: white"><i class="fa fa-trash"></i> </button>
                                                    @if($paquete->pdf_file == '')
                                                        <i class="fa fa-file-pdf-o" title="no hay pdf para este paquete"></i>
                                                    @else
                                                        <a href="{{ route('admin.ver.pdf', $paquete->pdf_file) }}" title="Ver pdf" target="_blank"><i class="fa fa-file-pdf-o"></i> </a>
                                                    @endif
                                                </td>
                                                {{-- VENTANA MODAL DELETE PAQUETE --}}
                                                <div class="modal fade" id="modalDeletePaquete{!! $paquete->id !!}">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span></button>
                                                                <h4 class="modal-title">Eliminar paquete:  "{!! $paquete->descripcion !!}"</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p class="text-red">¿Está seguro que desea eliminar el paquete?</p>
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
                                                {{-- FIN VENTANA MODAL DELETE PAQUETE --}}
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            @endif

                        </li>
                    @endif

                @endforeach
                </ul>
            </div>

        </div>
    </div>

@endsection