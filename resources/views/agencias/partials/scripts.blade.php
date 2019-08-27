<!-- COMMON SCRIPTS -->
<script src="{{ asset('agencias/js/jquery-2.2.4.min.js') }}"></script>
<script src="{{ asset('agencias/js/common_scripts.js') }}"></script>
<script src="{{ asset('agencias/js/main.js') }}"></script>
<script src="{{ asset('agencias/assets/validate.js') }}"></script>

<!-- Map -->
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script src="{{ asset('agencias/js/markerclusterer.js') }}"></script>
<script src="{{ asset('agencias/js/map_tours.js') }}"></script>
<script src="{{ asset('agencias/js/infobox.js') }}"></script>

{{--<!-- SPECIFIC SCRIPTS -->--}}
{{--<script src="{{ asset('agencias/js/video_header.js') }}"></script>--}}
{{--<script>--}}
    {{--HeaderVideo.init({--}}
        {{--container: $('.header-video'),--}}
        {{--header: $('.header-video--media'),--}}
        {{--videoTrigger: $("#video-trigger"),--}}
        {{--autoPlayVideo: true--}}
    {{--});--}}
{{--</script>--}}

<!-- WhatsHelp.io widget -->

<script type="text/javascript">
    (function () {
        var options = {
            facebook: "111804552860260", // Facebook page ID
            whatsapp: "+5491132354257", // WhatsApp number
            call_to_action: "Estamos online las 24hs", // Call to action
            button_color: "#E74339", // Color of button
            position: "right", // Position may be 'right' or 'left'
            order: "facebook,whatsapp", // Order of buttons
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /WhatsHelp.io widget -->

@yield('js')