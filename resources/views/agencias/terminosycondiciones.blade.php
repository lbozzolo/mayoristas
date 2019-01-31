@extends('agencias.layout')

@section('body')

    <main>
        <section class="hero_in general">
            <!-- <div class="wrapper">
                <div class="container">
                    <h1 class="fadeInUp"></h1>
                </div>
            </div> -->
        </section>
        <!--/hero_in-->

        <div class="container margin_60_35">
            <div class="row">


                <div class="col-lg-12" id="faq">


                    <!-- /accordion Reccomendations -->

                    <h4 class="nomargin_top">Terminos y Condiciones</h4>
                    <div role="tablist" class="add_bottom_45 accordion_2" id="terms">
                        <div class="card">


                            <div id="collapseOne_terms" role="tabpanel" data-parent="#terms">
                                <div class="card-body">
                                    <p><b>Bienvenidos a nuestro sitio web.</b></p>
                                    <p>A continuación Ud. leera las condiciones de uso del presente Sitio y las practicas y política de privacidad referidas a la recolección; uso y divulgación de la información personal compilada a través de los datos suministrados por Ud. (en adelante Usuario) al visitar, utilizar y/o registrarse en esta web. La utilización del Sitio por parte del Usuario implica conocimiento y aceptación plena de las Condiciones de Uso y política de privacidad. En caso de no aceptarlas no deberá utilizar el Sitio.
                                    </p>
                                    <p>
                                        Servicio y destino del Sitio. El Sitio ha sido programado para que constituya un medio virtual para el acceso de los Usuarios a la reserva de los servicios ofrecidos por la Agencia de viajes y su posterior comercialización al Usuario. El Sitio y los Servicios sólo están disponibles para personas que tengan capacidad legal para contratar y en caso de representar a una persona jurídica deben estar facultados con capacidad para obligarla. En consecuencia no podrán utilizar este Sitio las personas que no tengan esa capacidad, los menores de edad o quien legalmente no pueda obligar a la sociedad o persona jurídica en nombre de quien trate de contratar.
                                    </p>
                                    <p>
                                        Uso de los Servicios. La información recopilada (en adelante la “Información Personal”) incluye a modo de ejemplo: nombre y apellido, dirección postal, nacionalidad, número telefónico, clave de identificación tributaria, dirección de correo electrónico, y si Usted hace una reserva a través de nuestro Sitio Web , la información sobre su tarjeta de crédito (tal como el número de la tarjeta de crédito, el nombre del titular de la tarjeta y la fecha de vencimiento), toda vez que ella es necesaria para realizar transacciones. Asimismo podremos solicitar información sobre programas de fidelidad y viajero frecuente.
                                    </p>
                                    <p>
                                        El Usuario, deberá dar información veraz y actual. Cualquier modificación que se suscitare será informada a LA AGENCIA a la brevedad. Los daños y perjuicios que el incumplimiento de dicha obligación acarreare al Usuario y a LA AGENCIA será soportada por el Usuario. El Usuario se compromete a no divulgar su contraseña a terceros. Las referencias y/o links del Sitio respecto a nombres, marcas, productos o servicios de terceros, o vínculos a otros sitios Web o información de terceros no implica respaldo o recomendación para la utilización de ese sitio y /o servicio. El Usuario que decide navegar o seguir dichos vínculos o portales Web de terceros, lo efectúa bajo su riesgo y responsabilidad Los precios publicados en el sitio son precios exclusivos para la compra online de los productos y podrán diferir o ser idénticos a los precios publicados en el resto de las sucursales de LA AGENCIA según el caso.
                                    </p>
                                    <p>
                                        <b>Aceptación de reservas:</b>
                                    </p>
                                    <p>
                                        Para que una reserva revista la condición de tal debe ser confirmada por el prestador de los servicios. Por lo tanto el Usuario debe tener en cuenta que al solicitar una reserva esta puede ser denegada por factores externos a LA AGENCIA que a modo de ejemplo se cita: limitaciones en las cantidades disponibles para la compra; falta de autorización a la operación por parte de la entidad emisora o administradora de su tarjeta de crédito; inexactitudes o errores en la información suministrada, etc.. Si se cancela su solicitud de reserva o si se necesita información adicional para aceptar su pedido, LA AGENCIA se contactará con usted. En todos los casos que deban realizarse una modificación o cancelación parcial de su solicitud, el Usuario tendrá siempre derecho a cancelar la totalidad del mismo. Las reservas solicitadas estarán sujetas al cupo informado, debido a las demoras propias de las actualizaciones del sistema, es posible que el mismo le permita realizar una solicitud que luego deba ser anulada por falta de cupo. En ese caso le será informado en el e-mail confirmatorio Medios de Pago. El Sitio cuenta con los siguientes medios de pago válidos para compras online: - Todo pago y Mercado Pago. Es derecho de LA AGENCIA la inclusión, exclusión o suspensión de cualquier medio de pago.
                                    </p>
                                    <p>
                                        <b>Tipo de comprobantes a emitir:</b>
                                    </p>
                                    <p>
                                        En venta on line, sólo se emitirán facturas electrónicas a Consumidor Final (Comprobantes tipo “B”). La misma será remitida al e-mail informado en la solicitud, sin excepción. En caso de no recibirla, contactarse al teléfono de la agencia seleccionada en el sitio para corroborar un posible error en la carga del e-mail en la registración.
                                    </p>
                                    <p>
                                        <b>Prohibiciones:</b>
                                    </p>
                                    <p>
                                        Está prohibido a los Usuarios violar, vulnerar y/o de cualquier forma afectar el normal uso y la seguridad del Sitio. Las violaciones de la seguridad del sistema o de la red pueden dar lugar a responsabilidad civil o penal. El Usuario y/o el navegante ocasional del Sitio aceptan y reconocen expresamente que cualquier hecho, acto u omisión que afecte la seguridad y/o el normal desarrollo del Sitio tienen entidad suficiente para causar LA AGENCIA considerables daños y perjuicios incluyendo pero no limitándose a lucro cesante por caída y/o merma en las ventas, afectación de sus marcas, imagen comercial, pérdida de clientela, etc. El Usuario deberá notificar de inmediato a LA AGENCIA cualquier uso no autorizado de su contraseña o cuenta de que tenga conocimiento, a través del Sitio. Esta notificación deberá efectuarse a través del Sitio y, adicionalmente, remitiendo una nota al domicilio de LA AGENCIA debiendo especificar en ambos casos y en detalle toda la información con la que cuente respecto del uso no autorizado de su contraseña.
                                    </p>
                                    <p>
                                        <b>Datos Personales:</b>
                                    </p>
                                    <p>
                                        Sr. Usuario, al comunicarnos sus datos personales por medio de su registro en el Sitio, usted presta el consentimiento previsto por la ley argentina Nº 25.236, incluyendo la posibilidad de cesión prevista en su art. 11 que usted podrá revocar en cualquier momento simplemente solicitándolo vía correo electrónico y/o mediante cualquier otra forma que pueda ser fácilmente acreditable Sus datos personales se registran a los fines de comercializar el servicio solicitado, (efectuar las reservas, remitirle confirmaciones, transacciones de pago; procesar su factura, actualizaciones sobre su viaje, etc); para realizar acciones de marketing (ofrecerle productos y servicios; responder a sus preguntas y comentarios; realizar encuestas, estadísticas o análisis, notificarle por correo electrónico las ofertas especiales y los productos y servicios relacionados con viajes)excepto que Ud. no lo desee. A los fines de comercializar el servicio solicitado por el Usuario LA AGENCIA deberá suministrar sus datos personales a los proveedores para la gestión de sus reservas y/o solicitudes de compra, tales como aerolíneas, hoteles, compañías rentadoras de vehículos, mayoristas, y otros proveedores de productos y servicios que Usted contrate por nuestro Sitio Web El Usuario, en cuanto titular de los datos personales, tiene la facultad de ejercer el derecho de acceso a los mismos en forma gratuita a intervalos no inferiores a seis meses, salvo que se acredite un interés legítimo al efecto conforme lo establecido al artículo 14, inciso 3 de la Ley n° 25.326. LA AGENCIA sugiere a sus clientes que mantengan actualizados sus datos. De esta forma recibirán en forma periódica ofertas y promociones diseñadas a medida de sus necesidades. Si desea actualizar sus datos contactese con nostros a través de los medios de comunicación que figuran en el sitio o mediante el ejercicio del derecho de acceso previsto por el art. 14 de la Ley 25.326.
                                    </p>
                                    <p>
                                        Al recopilar la Información Personal LA AGENCIA le dará el tratamiento correspondiente según lo prescripto por el art. 27 de la LPDP, el Decreto Nº 1558/2001 y las Disposiciones Nº 10/2005 y 4/2009 de la Dirección Nacional de Protección de Datos Personales (Órgano de Control de la LPDP). Política de renuncia (opt out) Al registrarse en el Sitio al Usuario de le dará una opción en cuanto a si desea recibir circulares promocionales, mensajes o alertas de correo electrónico sobre ofertas. LA AGENCIA no solicita datos de sus clientes, ni en forma telefónica ni a través del correo electrónico. LA AGENCIA se encuentra inscripto en el Registro Nacional de la Dirección Nacional de Protección de Datos Personales, dependiente del Ministerio de Justicia y Derechos humanos tal como lo establece la ley. Si Ud. desea conocer más en profundidad sobre este tema haga click aquí o en la siguiente dirección: http://www.jus.gov.ar/dnpdp La Dirección Nacional De Protección De Datos Personales, Órgano de Control de la Ley n° 25.326, tiene la atribución de atender las denuncias y reclamos que se interpongan con relación al incumplimiento de las normas sobre protección de datos personales permite. Si Ud. desea conocer más en profundidad sobre este tema haga click aquí o en la siguiente dirección: http://www.jus.gov.ar/dnpdp
                                    </p>
                                    <p>
                                        <b>Precios:</b>
                                    </p>
                                    <p>
                                        Dado que el propósito del Sitio es permitir a los Usuarios realizar compras online, sin concurrir personalmente a las agencias, En el caso de que un servicio figure en las listas del Sitio a un precio incorrecto debido a un error LA AGENCIA tendrá el derecho, de corregir la orden facturando el precio vigente al momento del armado de la solicitud o bien, de anular el pedido reintegrando al Usuario los importes abonados. En este caso, se dará aviso del error al Usuario, y con él la posibilidad de cancelar o modificar la compra del producto facturado u ofrecido de forma incorrecta. Promociones. Las promociones que se ofrezcan en el Sitio pueden no ser necesariamente las mismas que se ofrecen en los locales de las agencias.
                                    </p>
                                    <p>
                                        Salvo indicación en contrario o aprobación por parte de LA AGENCIA las promociones no son acumulativas unas con otras. Derechos de autor y marcas registradas. A menos que se indique lo contrario, los derechos de autor, marcas comerciales, presentación comercial (trade dress) y/u otros derechos de propiedad intelectual y cualquier contenido del Sitio son de propiedad, o controlados o licenciados, de LA AGENCIA y están protegidos por las leyes Argentinas y tratados internacionales sobre propiedad intelectual. La compilación (es decir, la colección, secuencia, estructura, organización y montaje) de todo el contenido de este Sitio es propiedad exclusiva de LA AGENCIA y también está protegida por las leyes Argentinas y tratados internacionales sobre propiedad intelectual. El acceso a este Sitio no autoriza a nadie a utilizar cualquier nombre, logotipo o marca de cualquier manera. Modificaciones en las Condiciones de Uso. En caso de que estas Condiciones de Uso sean modificadas, tales modificaciones serán publicadas en el Sitio, obrando en él la versión vigente al momento del inicio de cada sesión. Toda vez que por tratarse de un sitio Web abierto a los clientes en general, LA AGENCIA carece de posibilidad de notificarle particularmente a cada uno de ellos, salvo mediante la publicación en el propio Sitio, por lo que el Usuario se compromete a verificar en forma las Condiciones de Uso con cualquier uso que haga del mismo, entendiéndose que al iniciar cada sesión acepta las que estén vigentes y publicadas en ese momento en la forma y con los efectos establecidos en las presentes Condiciones de Uso. Ley aplicable, resolución de controversias: Este contrato se interpretará según la legislación vigente en la República Argentina. Cualquier conflicto relacionado con este contrato o con el uso que el Usuario haga de este Sitio será resuelto por los tribunales ordinarios competentes según la legislación vigente y aplicable a la relación de consumo existente entre las partes.
                                    </p>
                                    <p>
                                        En caso de que dicha legislación no defina una competencia específica, será competente la justicia nacional ordinaria en asuntos comerciales con asiento en la Ciudad Autónoma de Buenos Aires, siendo aplicable esta disposición aunque el Usuario estuviera realmente domiciliado fuera de los límites de la Ciudad Autónoma de Buenos Aires o de la República Argentina, por entenderse que este lugar ha sido el lugar de celebración del presente contrato. Salvo que lo contrario haya sido acordado previamente y por escrito firmado entre el Usuario y LA AGENCIA, todas las notificaciones que se hagan a los usuarios en relación a las presentes Condiciones de Uso se publicarán en el Sitio y tendrán efecto desde la fecha de su publicación.
                                    </p>
                                    <p>
                                        Las notificaciones que el Usuario quiera dirigir a LA AGENCIA deberán ser dirigidas a al domicilio que figura en el pie de la pagina o a los correos de contacto, donde queda constituido el domicilio. Por dudas sobre las Condiciones de Uso o demás políticas y principios que rigen el Sitio el Usuario podrá efectuar las consultas que estime corresponder comunicándose al teléfono del Centro de Atención al Cliente indicado en el encabezado de la web
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- /card -->
                    </div>
                    <!-- /accordion Terms -->


                    <!-- /accordion Booking -->
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!--/container-->


        <div class="call_section_terminos">
            <div class="container clearfix">
                <div class="col-lg-5 col-md-6 float-right wow" data-wow-offset="250">
                    <div class="block-reveal">
                        <div class="block-vertical"></div>

                    </div>
                </div>
            </div>
        </div>
    </main>

</div>
<!-- page -->

@endsection