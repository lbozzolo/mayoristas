<!DOCTYPE html>

<html lang="en">

<head>@include('partials.htmlheader')</head>

<body>

<div>

    @include('partials.mainheader')



        <section class="content">

            @yield('body')

        </section>



    @include('partials.footer')

</div>
@include('partials.scripts')

</body>

</html>

