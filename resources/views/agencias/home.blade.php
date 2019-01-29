@extends('agencias.layout')

@section('body')



    <section class="hero_in vacaciones">
        <!-- <div class="wrapper">
            <div class="container">
                <h1 class="fadeInUp"></h1>
            </div>
        </div> -->
    </section>


    <div class="container margin_60_35">
        <h4 class="nomargin_top">AFRICA</h4>

        <!-- /custom-search-input-2 -->

        <div class="isotope-wrapper">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 isotope-item popular">
                    <div class="box_grid">
                        <figure>

                            <a href="#"><img src="{{ asset('agencias/img/tour_1.jpg') }}" class="img-fluid" alt="" width="800" height="533"></a>
                        </figure>
                        <div class="wrapper">
                            <label for="all"><a href="detalle_paquete.php">Sudafrica Compacto con Reserva Privada</a></label>
                        </div>
                    </div>
                </div>
                <!-- /box_grid -->
                <div class="col-xl-4 col-lg-6 col-md-6 isotope-item latest">
                    <div class="box_grid">
                        <figure>
                            <a href="#"><img src="{{ asset('agencias/img/tour_2.jpg') }}" class="img-fluid" alt="" width="800" height="533"></a>
                        </figure>
                        <div class="wrapper">
                            <label for="all"><a href="detalle_paquete.php">Sudafrica Clásica en auto</a></label>
                        </div>

                    </div>
                </div>
                <!-- /box_grid -->
                <div class="col-xl-4 col-lg-6 col-md-6 isotope-item popular">
                    <div class="box_grid">
                        <figure>

                            <a href="#"><img src="{{ asset('agencias/img/tour_3.jpg') }}" class="img-fluid" alt="" width="800" height="533"></a>
                        </figure>
                        <div class="wrapper">
                            <label for="all"><a href="detalle_paquete.php">Sudafrica Compacto</a></label>
                        </div>
                    </div>
                </div>
                <!-- /box_grid -->
                <div class="col-xl-4 col-lg-6 col-md-6 isotope-item latest">
                    <div class="box_grid">
                        <figure>

                            <a href="#"><img src="{{ asset('agencias/img/tour_4.jpg') }}" class="img-fluid" alt="" width="800" height="533"></a>
                        </figure>
                        <div class="wrapper">
                            <label for="all"><a href="detalle_paquete.php">Madagascar - Esencias del Sur</a></label>
                        </div>

                    </div>
                </div>
                <!-- /box_grid -->
                <div class="col-xl-4 col-lg-6 col-md-6 isotope-item popular">
                    <div class="box_grid">
                        <figure>
                            <a href="#"><img src="{{ asset('agencias/img/tour_5.jpg') }}" class="img-fluid" alt="" width="800" height="533"></a>
                        </figure>
                        <div class="wrapper">
                            <label for="all"><a href="detalle_paquete.php">Marruecos - Ciudades Imperiales</a></label>
                        </div>
                    </div>
                </div>
                <!-- /box_grid -->
                <div class="col-xl-4 col-lg-6 col-md-6 isotope-item latest">
                    <div class="box_grid">
                        <figure>

                            <a href="#"><img src="{{ asset('agencias/img/tour_6.jpg') }}" class="img-fluid" alt="" width="800" height="533"></a>
                        </figure>
                        <div class="wrapper">
                            <label for="all"><a href="detalle_paquete.php">Egipto Clásico</a></label>
                        </div>
                    </div>
                </div>
                <!-- /box_grid -->
            </div>
            <!-- /row -->
        </div>
        <!-- /isotope-wrapper -->


    </div>
    <!-- /container -->

    <div class="bg_color_1">
        <div class="container margin_60_35">
            <div class="row">
                <div class="col-md-4">
                    <a href="#0" class="boxed_list">
                        <i class="pe-7s-help2"></i>
                        <h4>Necesitas Ayuda? Contactanos</h4>
                        <p>Y te asesoraremos en todo lo que necesitas para tu viaje.</p>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#0" class="boxed_list">
                        <i class="pe-7s-wallet"></i>
                        <h4>Formas de Pago</h4>
                        <p>Tenemos las mejores Formas de Pago y las mejores Financiaciones.</p>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#0" class="boxed_list">
                        <i class="pe-7s-note2"></i>
                        <h4>Politica de Cancelación</h4>
                        <p>Pasa por esta sección y mira en detalle nuestra Política de Cancelación.</p>
                    </a>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /bg_color_1 -->
    <div class="call_section_vacaciones">
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


    <!-- Sign In Popup -->
    <div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
        <div class="small-dialog-header">
            <h3>Acceso Agencias</h3>
        </div>
        <form>
            <div class="sign-in-wrapper">
                {{--<img src="{{ asset('agencias/img/logo_sticky1.png') }}" width="333" height="80" data-retina="true" alt="" class="logo_sticky">--}}
                <div class="divider"></div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" id="email">
                    <i class="icon_mail_alt"></i>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" id="password" value="">
                    <i class="icon_lock_alt"></i>
                </div>
                <div class="clearfix add_bottom_15">
                    <div class="checkboxes float-left">
                        <label class="container_check">Recordarme
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </div>

                </div>
                <div class="text-center"><input type="submit" value="Ingresar" class="btn_1 full-width"></div>

                <div id="forgot_pw">
                    <div class="form-group">
                        <label>Por favor, confirme el correo electrónico de acceso a continuación</label>
                        <input type="email" class="form-control" name="email_forgot" id="email_forgot">
                        <i class="icon_mail_alt"></i>
                    </div>
                    <p>Recibirá un correo electrónico con un enlace que le permitirá restablecer su contraseña a una nueva preferida.</p>
                    <div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
                </div>
            </div>
        </form>
        <!--form -->
    </div>
    <!-- /Sign In Popup -->


@endsection








