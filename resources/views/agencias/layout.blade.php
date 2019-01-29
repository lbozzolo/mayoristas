<!DOCTYPE html>
<html lang="en">

<head>
    @include('agencias.partials.htmlheader')
</head>

<body>

    <div id="page">

        <main>

            @include('agencias.partials.mainheader')

            @include('agencias.partials.messages')

            @yield('body')

        </main>

        @include('agencias.partials.footer')

    </div>

    @include('agencias.partials.scripts')

</body>

</html>

