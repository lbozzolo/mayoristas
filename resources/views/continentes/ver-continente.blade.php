@extends('base')

@section('contenido')

    {{--<section>
        <img alt="" class="header-page" src="{{ asset('img/_59fc50ecda3c9.jpeg') }}">
    </section>--}}



    <div class="row">

        @foreach($continente->images as $imagen)
            @if($imagen->principal == 1)
                <img src="{{ route('admin.ver.image', $imagen->path) }}" alt="" class="img-responsive">
            @endif
        @endforeach
        <div class="container" style="padding: 20px">
            <h2>{!! $continente->nombre !!}</h2>
            <p class="descripcion-continente">{!! $continente->descripcion !!}</p><hr>

            <div class="row">
                <div class="col-lg-12 col-md-8">

                    <ul class="list-unstyled">
                        @foreach($continente->paquetes as $paquete)

                            <li class="list-group-item">
                                @if($paquete->pdf_file != '')
                                    <a href="{{ route('admin.ver.pdf', $paquete->pdf_file) }}" class="pull-right" title="ver detalles" target="_blank" style="font-size: 1.2em"><i class="fa fa-info-circle"></i> ver detalles</a>
                                @endif
                                <h3 class="paquetes-title">{!! strtoupper($paquete->descripcion) !!}</h3>

                                <div class="table-responsive">
                                    <table class="table table-bordered" style="background-color: beige">
                                        <tbody>
                                        @foreach($paquete->opciones as $opcion)
                                            <tr>
                                                <td>{!! $opcion->descripcion !!}</td>
                                                <td width="250" class="text-center">
                                                    USD <span class="text-info">{!! $opcion->importe !!}</span>
                                                    + IMP USD <span class="text-info">{!! $opcion->impuesto !!}</span>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </li>

                        @endforeach
                    </ul>

                </div>
                <div class="col-lg-4 col-md-4"></div>
            </div>

        </div>


    </div>


@endsection