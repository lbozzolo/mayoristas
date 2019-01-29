@extends('layout-login')

@section('body')

    <div class="row">
        <div style="padding: 30px 10%">

                @include('admin.partials.head')

            <div class="col-lg-1 col-xs-12">

                @include('admin.partials.nav')

            </div>
            <div class="col-lg-7 col-xs-12" style="margin-bottom: 30px">

                <h3>Editar paquete</h3>

                <div style="margin-top: 30px">
                    {!! Form::model($paquete, ['method' => 'put', 'url' => route('admin.paquete.update', $paquete->id), 'enctype' => 'multipart/form-data']) !!}

                    <div class="form-group">
                        {!! Form::label('nombre', 'Nombre') !!}
                        {!! Form::text('nombre', $paquete->nombre, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('descripcion', 'Descripción') !!}
                        {!! Form::textarea('descripcion', $paquete->descripcion, ['class' => 'form-control', 'rows' => '3', 'style' => 'margin-bottom: 10px']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('contenido', 'Contenido') !!}
                        {!! Form::textarea('contenido', null, ['id'=>'summernote', 'class'=>'form-control', 'rows'=>'60', 'cols'=>'80']) !!}
                    </div>

                    {{--<div class="form-group">--}}
                        {{--{!! Form::label('pdf_file', 'Cambiar archivo PDF') !!}--}}
                        {{--{!! Form::file('pdf_file', ['class' => 'form-control']) !!}--}}
                        {{--<div style="margin-top: 10px">--}}
                            {{--@if($paquete->pdf_file == '')--}}
                                {{--<i class="fa fa-file-pdf-o" title="no hay pdf para este paquete"></i>--}}
                            {{--@else--}}
                                {{--<a href="{{ route('admin.ver.pdf', $paquete->pdf_file) }}" title="Ver pdf" target="_blank"><i class="fa fa-file-pdf-o"></i> </a>--}}
                            {{--@endif--}}
                            {{--Archivo actual: <em class="text-warning">{!! ($paquete->pdf_file != '')? $paquete->pdf_file : '- no hay pdf seleccionado -' !!}</em>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {!! Form::submit('Guardar cambios', ['class' => 'btn btn-primary']) !!}
                    <a href="{{ route('admin.panel', 'paquetes') }}" class="btn cancelar">Cancelar</a>
                    {!! Form::close() !!}



                </div>

                <div style="margin-top: 100px">

                    <h3>Agregar imágenes</h3>

                    <div class="form-group" style="margin-top: 20px">
                        {!! Form::label('img', 'Subir foto') !!}
                        {!! Form::open(['url' => route('admin.image.store', $paquete->id), 'method' => 'post', 'class' => 'form', 'enctype' => 'multipart/form-data']) !!}
                        <div class="input-group input-group-sm">
                            {!! Form::file('img', ['class' => 'form-control inputImage']) !!}
                            {!! Form::hidden('seccion', 'paquete') !!}
                            <span class="input-group-btn">
                                {!! Form::submit('Subir', ['class' => 'btn btn-info btn-flag']) !!}
                            </span>
                        </div>
                        {!! Form::close() !!}
                    </div>

                    <ul class="list-unstyled list-inline">
                        @foreach($paquete->images as $imagen)
                            @if(count($paquete->images) > 0)
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
                                            <a href="{{ route('admin.image.principal', ['imagen' => $imagen->id, 'seccion' => 'paquete']) }}" class="btn btn-default btn-xs" title="Marcar como principal" style="display: block"><i class="fa fa-check"></i></a>
                                        @else
                                            <a href="#" class="btn btn-default btn-xs" disabled title="Marcar como principal" style="display: block"><i class="fa fa-check"></i></a>
                                        @endif
                                    </span>
                                </li>
                            @endif
                        @endforeach
                    </ul>

                </div>

            </div>



        </div>
    </div>

@endsection

@section('js')



    <script type="text/javascript">

        $(document).ready(function() {
            $('#summernote').summernote({
                tabsize: 2,
                height: 400,
                toolbar: [
                    [ 'style', [ 'style' ] ],
                    [ 'font', [ 'bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear'] ],
                    [ 'fontname', [ 'fontname' ] ],
                    [ 'fontsize', [ 'fontsize' ] ],
                    [ 'color', [ 'color' ] ],
                    [ 'para', [ 'ol', 'ul', 'paragraph', 'height' ] ],
                    [ 'table', [ 'table' ] ],
                    [ 'insert', [ 'link'] ],
                    [ 'view', [ 'undo', 'redo', 'fullscreen', 'codeview', 'help' ] ]
                ]
            });
        });

    </script>

@endsection