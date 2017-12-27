@extends('layout-login')

@section('body')

    <div class="row">
        <div style="padding: 30px 10%">

                @include('admin.partials.head')

            <div class="col-lg-1 col-xs-12">

                @include('admin.partials.nav')

            </div>
            <div class="col-lg-7 col-xs-12" style="margin-bottom: 30px">

                <div>
                    <h3>Opciones</h3>
                    <ul class="list-unstyled" style="margin-top: 30px">
                       @foreach($continentes as $id => $cont)
                           <li data-id="{!! $id !!}" class="continentes btn btn-default" style="border: {{ (Request::is('admin/continente/'.$id)? '2px solid #1ABC9C' : '1px solid lightgray') }}">
                               <a href="{{ route('admin.continente.seleccion', $id) }}">{!! $cont !!}</a>
                           </li>
                       @endforeach
                    </ul>
                </div>

                @if(isset($continente))

                    @if($paquetes->count() == 0)
                        <span style="display: inline-block; margin-top: 30px">No hay paquetes en '{!! $continente->nombre !!}'</span>
                    @else

                <div style="padding: 0px 50px;">

                    @include('partials.messages')

                    <h4 style="margin: 20px 0px">Nueva opción</h4>
                    {!! Form::open(['method' => 'post', 'url' => '']) !!}

                    <div class="form-group">
                        {!! Form::label('paquetes_id', 'Seleccione el paquete') !!}
                        <select class="form-control">
                            @foreach($paquetes as $paquete)
                                <option name="paquete_id" value="{!! $paquete->id !!}">#{!! $paquete->id !!}-{!! $paquete->descripcion !!}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        {!! Form::label('descripcion', 'Descripción') !!}
                        {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('importe', 'Importe') !!}
                        {!! Form::text('importe', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('impuesto', 'Impuesto') !!}
                        {!! Form::text('impuesto', null, ['class' => 'form-control']) !!}
                    </div>

                    {!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
                        @endif

                @endif

            </div>

            <div class="col-lg-4 col-xs-12">

                @if(isset($continente))
                <h3>Paquetes de {!! $continente->nombre !!}</h3>
                <h4>Opciones:</h4>
                @endif
                <ul class="list-unstyled" style="margin-top: 30px">

                    @if(isset($paquetes))
                    @foreach($paquetes as $paquete)
                        <li>

                            <strong><em>#{!! $paquete->id !!}</em> - {!! $paquete->descripcion !!}</strong>

                            @if(count($paquete->opciones) != 0)
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <tbody>
                                    @foreach($paquete->opciones as $opcion)
                                        <tr>
                                            <td>{!! $opcion->descripcion !!}</td>
                                            <td class="text-right" width="100">
                                                <a href="{{ route('admin.opcion.editar', $opcion->id) }}" title="editar"><i class="fa fa-pencil"></i></a>
                                                <button class="text-danger" data-toggle="modal" data-target="#modalDeleteOpcion{!! $opcion->id !!}" style="border: none; background-color: white"><i class="fa fa-trash"></i> </button>
                                            </td>
                                            {{-- VENTANA MODAL DELETE OPCION --}}
                                            <div class="modal fade" id="modalDeleteOpcion{!! $opcion->id !!}">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span></button>
                                                            <h4 class="modal-title">Eliminar opción:  "{!! $opcion->descripcion !!}"</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p class="text-red">¿Está seguro que desea eliminar la opción?</p>
                                                            <p>Si lo hace NO podrá deshacer la acción</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default pull-left cancelar" data-dismiss="modal">Cancelar</button>
                                                            {!! Form::open(['method' => 'DELETE', 'url' => route('admin.opcion.delete', $opcion->id)]) !!}
                                                            {!! Form::submit('Eliminar', ['class' => 'btn eliminar']) !!}
                                                            {!! Form::close() !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- FIN VENTANA MODAL DELETE OPCION --}}
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            @endif

                        </li>
                    @endforeach
                    @endif

                </ul>

            </div>

        </div>
    </div>

@endsection