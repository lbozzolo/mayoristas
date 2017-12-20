@extends('layout-login')

@section('body')

    <div class="row">
        <div style="padding: 30px 10%">

            @include('admin.partials.head')

            <div class="col-lg-1">

                @include('admin.partials.nav')

            </div>
            <div class="col-lg-11 col-xs-12" style="margin-bottom: 30px">

                <div style="padding: 0px 50px">
                @include('partials.messages')
                <h3>Usuarios</h3>

                    <div class="table-responsive">

                        <table class="table ">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Legajo</th>
                                    <th>Teléfono</th>
                                    <th>Domicilio</th>
                                    <th>Email</th>
                                    <th>Fecha</th>
                                    <th>Estado</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($usuarios as $usuario)
                                    @if($usuario->rol != 8)
                                    <tr>
                                        <td>{!! $usuario->id !!}</td>
                                        <td>{!! $usuario->nombre !!}</td>
                                        <td>{!! $usuario->apellido !!}</td>
                                        <td>{!! $usuario->legajo !!}</td>
                                        <td>{!! $usuario->telefono !!}</td>
                                        <td>{!! $usuario->domicilio !!}</td>
                                        <td>{!! $usuario->email !!}</td>
                                        <td>{!! $usuario->fecha_alta !!}</td>
                                        <td>{!! $usuario->estado_tag !!}</td>
                                        <td>
                                            @if($usuario->estado == 0)
                                                <a href="{{ route('admin.usuarios.habilitar', $usuario->id) }}" class="btn btn-success btn-xs" title="habilitar"><i class="fa fa-check-square"></i> </a>
                                            @elseif($usuario->estado == 1)
                                                <a href="{{ route('admin.usuarios.deshabilitar', $usuario->id) }}" class="btn btn-danger btn-xs" title="deshabilitar"><i class="fa fa-ban"></i> </a>
                                            @endif
                                            <a href="{{ route('admin.usuarios.editar', $usuario->id) }}" class="btn btn-default btn-xs" title="editar"><i class="fa fa-edit"></i> </a>
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach

                            </tbody>
                        </table>

                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection