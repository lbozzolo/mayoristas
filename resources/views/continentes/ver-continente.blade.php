@extends('base')

@section('contenido')

    <section>
        <img alt="" class="header-page" src="{{ asset('img/_59fc50ecda3c9.jpeg') }}">
    </section>

    <section id="internalpage">

        <!--start container-->
        <div class="container clearfix">

            <div class="grid_12">
                <div class="titlesection ">
                    <h2>{!! $continente->nombre !!}</h2>
                </div>
            </div>

            <div class="grid_12 blue">
                <p>{!! $continente->descripcion !!}</p>
            </div>

            <div class="grid_12">
                <div class="titlesection rotate-fade-up">
                    <h3>Paquetes Destacados</h3>

                    <ul class="list-unstyled">
                        <li class="list-group-item"></li>
                    </ul>

                </div>
            </div>


        </div>
        <!--end container-->



    </section>

@endsection