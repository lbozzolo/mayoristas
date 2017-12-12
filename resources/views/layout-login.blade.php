<!DOCTYPE html>

<html lang="en">

<head>@include('partials.htmlheader')</head>

<body id="startpage">

    <div>

        @include('partials.mainheader')

        <section class="content">

            @yield('body')

        </section>


    </div>
    @include('partials.scripts')

</body>

</html>

