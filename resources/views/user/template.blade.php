<!DOCTYPE html>
<html lang="en">
    <head> @include('user.layouts.head') </head>
    <body>
        @include('user.layouts.nav')
        @yield('header')
        <div class="container">
            @yield('main')
        </div>

        <hr>
        @include('user.layouts.footer')
    </body>
</html>
