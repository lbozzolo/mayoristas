<footer>
    <div class="container margin_60_35">
        <div class="row">
            <div class="col-lg-5 col-md-12 p-r-5">
                <p><img src="{{ asset('agencias/img/logo.png') }}" width="150" height="36" data-retina="true" alt=""></p>
                <p>* EVyT - Leg 16935 *</p>
                <p>Dirección: Zapiola N° 4182 - 3A - CABA (1429)</p>
                <div class="follow_us">
                    <ul>
                        <li>Seguinos en</li>
                        <li><a href="https://www.facebook.com/elysium.tvl/" target="_new"><i class="ti-facebook"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/elysium-travel/" target="_new"><i class="ti-linkedin"></i></a></li>
                        <li><a href="https://www.instagram.com/elysium_tvl/" target="_new"><i class="ti-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 ml-lg-auto">

                <ul class="links">

                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5>Contactanos</h5>
                <ul class="contacts">
                    <li><a href="#"><i class="ti-mobile"></i> +54 (11) 5368 9811</a></li>
                    <li><a href="mailto:info@elysiumtravel.com.ar"><i class="ti-email"></i> info@elysiumtravel.com.ar</a></li>
                </ul>
                <div id="newsletter">
                    <h6>Newsletter</h6>
                    <div id="message-newsletter"></div>
                    {!! Form::open(['url' => route('newsletter.store'), 'method' => 'post']) !!}
                        <div class="form-group">
                            {!! Form::email('email_newsletter', null, ['id' => 'email_newsletter', 'class' => 'form-control', 'placeholder' => 'Tu email']) !!}
                            {!! Form::submit('Enviar', ['id' => 'submit-newsletter']) !!}
                        </div>
                    {!! Form::close() !!}
                    {{--<form method="post" action="{{ asset('agencias/assets/newsletter.php') }}" name="newsletter_form" id="newsletter_form">--}}
                        {{--<div class="form-group">--}}
                            {{--<input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Tu email">--}}
                            {{--<input type="submit" value="Enviar" id="submit-newsletter">--}}
                        {{--</div>--}}
                    {{--</form>--}}
                </div>
            </div>
        </div>
        <!--/row-->

        <hr>
        <div class="row">
            <div class="col-lg-6">
                <ul id="footer-selector">


                </ul>
            </div>
            <div class="col-lg-6">
                <ul id="additional_links">
                    <li><a href="{{ route('agencias.terminosycondiciones') }}">Terminos y condiciones</a></li>
                    <li><a href="{{ route('agencias.contratacion') }}">Contratación</a></li>
                    <li><span>© 2018 by VerticeDigital.com.ar</span></li>
                </ul>
            </div>
        </div>
    </div>
</footer>