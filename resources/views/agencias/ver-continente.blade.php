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

    <div class="container margin_60_35">
        <h4 class="nomargin_top">{!! $continente->nombre !!}</h4>
        <div class="isotope-wrapper">
            <div class="row">
                @foreach($continente->paquetes as $paquete)

                    <div class="col-xl-4 col-lg-6 col-md-6 isotope-item popular">
                        <div class="box_grid">
                            <figure>
                                @foreach($paquete->images as $imagen)
                                    @if($imagen->principal == 1)
                                        <img src="{{ route('admin.ver.image', $imagen->path) }}" alt="" class="img-responsive">
                                    @endif
                                @endforeach
                            </figure>
                            <div class="wrapper">
                                <label for="all"><a href="{{ route('continentes.paquete.ver', $paquete->id) }}">{!! $paquete->nombre !!}</a></label>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </div>
    <!-- /container -->

    <div class="bg_color_1">
        <div class="container margin_60_35">
            <div class="row">

            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /bg_color_1 -->
    <div class="call_section_eventos">
        <div class="container clearfix">
            <div class="col-lg-5 col-md-6 float-right wow" data-wow-offset="250">
                <div class="block-reveal">
                    <div class="block-vertical"></div>
                    <div class="box_1">
                        <h3>Ahorrá tiempo y dinero.</h3>
                        <p>Viajar se trata de disfrutar, por eso no queremos hacerte perder tiempo. Contrata nuestros servicios vacacionales.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection