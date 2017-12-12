<!DOCTYPE html>

<html lang="en">

<head>@include('partials.htmlheader')</head>

<body id="startpage">

<div>

    @include('partials.mainheader')



        <section class="content">

                @include('partials.messages')
                @yield('body')

        </section>



    @include('partials.footer')

</div>
@include('partials.scripts')

</body>

</html>

