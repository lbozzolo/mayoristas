<!DOCTYPE html>
<html lang="en">

<head>
    @include('agencias.partials.htmlheader')

    {{--@foreach($homeBase->images as $imagen)--}}
        {{--@if($imagen->principal == 1)--}}
            {{--<style type="text/css">--}}

                {{--.hero_in.continente:before {--}}
                    {{--background: url({{ route('admin.ver.image', $imagen->path) }}) center center no-repeat;--}}
                    {{---webkit-background-size: cover;--}}
                    {{---moz-background-size: cover;--}}
                    {{---o-background-size: cover;--}}
                    {{--background-size: cover;--}}
                {{--}--}}

            {{--</style>--}}
        {{--@endif--}}
    {{--@endforeach--}}

    <style type="text/css">

        .hero_in.continente:before {
            background: url({{ asset('agencias/img/tailandia.jpg') }}) center center no-repeat;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

    </style>
</head>

<body>

<div id="page">

    <main>
        @include('agencias.partials.mainheader')

        @include('agencias.partials.messages')

        <section class="hero_in continente"></section>

        <div class="bg_color_1">

            {{--<nav class="secondary_nav sticky_horizontal">--}}
                {{--<div class="container margin_60_35">--}}
                    {{--<h3 class="nomargin-top">{!! $homeBase->paquetes->first()->nombre !!}</h3>--}}
                    {{--<ul class="clearfix">--}}
                        {{--<li>descripcion</li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</nav>--}}
            <div class="container margin_60_35">
                <div class="row">
                    <div class="col-lg-7">

                            <h2>{!! $homeBase->paquetes->first()->nombre !!}</h2>

                            {!! $homeBase->paquetes->first()->descripcion !!}


                    </div>
                </div>
            </div>
        </div>
        {{--<div class="container margin_60_35">--}}
            {{--<h4 class="nomargin_top">{!! $homeBase->paquetes->first()->nombre !!}</h4>--}}
            {{--<div class="isotope-wrapper">--}}
                {{--<div class="row">--}}



                        {{--{!! $homeBase->paquetes->first()->descripcion !!}--}}



                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

    </main>

    @include('agencias.partials.footer')

</div>

@include('agencias.partials.scripts')

</body>

</html>