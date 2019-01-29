@extends('agencias.layout')

@section('css')

    @foreach($continente->images as $imagen)
        @if($imagen->principal == 1)
            <style type="text/css">

                .hero_in.continente:before {
                    background: url({{ route('admin.ver.image', $imagen->path) }}) center center no-repeat;
                    -webkit-background-size: cover;
                    -moz-background-size: cover;
                    -o-background-size: cover;
                    background-size: cover;
                }

            </style>
        @endif
    @endforeach


@endsection

@section('body')

    <section class="hero_in continente"></section>

    <div class="bg_color_1">
        <nav class="secondary_nav sticky_horizontal">
            <div class="container">
                <ul class="clearfix">
                    <li><a href="#description" class="active">{!! $paquete->descripcion !!}</a></li>
                </ul>
            </div>
        </nav>
        <div class="container margin_60_35">
            <div class="row">
                <div class="col-lg-7">
                    <section id="description">
                        <h2>{!! $paquete->descripcion !!}</h2>

                        {!! $paquete->contenido !!}

                    </section>
                    <!-- /section -->


                    <!-- /section -->


                    {{--<div class="add-review">--}}
                        {{--<h5>Contacta a uno de nuestros Representantes</h5>--}}
                            {{--{!! Form::open(['url' => route('agencias.contact'), 'method' => 'post', 'autocomplete' => 'off']) !!}--}}
                            {{--<div class="row">--}}
                                {{--<div class="form-group col-md-6">--}}
                                    {{--{!! Form::label('name_paquete', 'Apellido y Nombre *') !!}--}}
                                    {{--{!! Form::text('name_pauquete', null, ['id' => 'name_paquete', 'placeholdere' => '', 'class' => 'form-control']) !!}--}}
                                {{--</div>--}}
                                {{--<div class="form-group col-md-6">--}}
                                    {{--{!! Form::label('email_paquete', 'Email *') !!}--}}
                                    {{--{!! Form::email('email_paquete', null, ['id' => 'email_paquete', 'class' => 'form-control']) !!}--}}
                                {{--</div>--}}

                                {{--<div class="form-group col-md-12">--}}
                                    {{--{!! Form::label('message_paquete', 'Comentario') !!}--}}
                                    {{--{!! Form::textarea('message_paquete', null, ['id' => 'paquete_text', 'class' => 'form-control', 'style' => 'height: 130px']) !!}--}}
                                {{--</div>--}}
                                {{--<div class="form-group col-md-12 add_top_20">--}}
                                    {{--{!! Form::submit('Contactar', ['class' => 'btn_1', 'id' => 'submit-review']) !!}--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--{!! Form::close() !!}--}}
                    {{--</div>--}}
                </div>
                <!-- /col -->

                <aside class="col-lg-5" id="sidebar">
                    <div class="box_detail booking">
                        <div class="price">
                            <span>Tarifas</span>

                        </div>

                        @if(count($paquete->opciones) != 0)
                            <div class="table-responsive">
                                <table class="table table-bordered" style="background-color: beige">
                                    <tbody>
                                    @forelse($paquete->opciones as $opcion)
                                        <tr>
                                            <td class="titulo-opcion">{!! $opcion->descripcion !!}</td>
                                            <td width="170" class="text-center"><span class="text-info">U$D {!! $opcion->importe !!} + {!! $opcion->impuesto !!}% IMP U$D</span></td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="2">Todavía no hay ninguna opción cargada en este paquete.</td>
                                        </tr>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        @endif

                    </div>
                    <ul class="share-buttons">
                        <li><a class="fb-share" href="#0"><i class="social_facebook"></i> Share</a></li>
                        <li><a class="twitter-share" href="#0"><i class="social_twitter"></i> Tweet</a></li>
                        <li><a class="gplus-share" href="#0"><i class="social_googleplus"></i> Share</a></li>
                    </ul>
                </aside>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>

@endsection