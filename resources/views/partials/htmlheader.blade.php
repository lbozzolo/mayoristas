<base href="{{ asset('') }}">
<meta charset="UTF-8">
<title>Mayoristas - @yield('htmlheader_title','Mayoristas') </title>
<meta name="description" content="Elysium Travel - Agencia de Turismo"> <!--insert your description here-->
<meta name="author" content="nicDark"> <!--insert your name here-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--meta responsive-->

@yield('head')

<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
<link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('plugins/fontawesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('css/grid.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('css/responsive.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('css/animate.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('css/superfish.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('css/isotope.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('css/flexslider.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('rs-plugin/css/settings.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('showbizpro/css/settings.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('css/fancybox/jquery.fancybox.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('css/fancybox/jquery.fancybox-thumbs.css') }}" rel="stylesheet" type="text/css">
{{--<link href="{{ asset('plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />--}}

<!--google fonts-->
<link href='http://fonts.googleapis.com/css?family=Signika:400,300,600,700' rel='stylesheet' type='text/css'>

<!--FAVICONS-->
<link rel="apple-touch-icon" sizes="57x57" href="{{ asset('img/apple-icon-57x57.png') }}">
<link rel="apple-touch-icon" sizes="60x60" href="{{ asset('img/apple-icon-60x60.png') }}">
<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/apple-icon-72x72.png') }}">
<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-icon-76x76.png') }}">
<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/apple-icon-114x114.png') }}">
<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('img/apple-icon-120x120.png') }}">
<link rel="apple-touch-icon" sizes="144x144" href="{{ asset('img/apple-icon-144x144.png') }}">
<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/apple-icon-152x152.png') }}">
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/apple-icon-180x180.png') }}">
<link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('img/android-icon-192x192.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('img/favicon-96x96.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon-16x16.png') }}">
<link rel="manifest" href="{{ asset('img/manifest.json') }}">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="img/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<!--END FAVICONS-->


{{--<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">--}}
{{--<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>--}}
{{--<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>--}}
{{--<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">--}}
{{--<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js" defer></script>--}}

<!-- include summernote css/js -->
<link href="{{ asset('plugins/summernote/summernote.css') }}" rel="stylesheet">
<script src="{{ asset('plugins/summernote/summernote.js') }}" defer></script>


@yield('css')
