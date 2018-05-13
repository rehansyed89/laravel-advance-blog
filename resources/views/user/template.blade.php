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

        <script src="{{ asset('user/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('user/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('user/js/jqBootstrapValidation.js') }}"></script>
        <script src="{{ asset('user/js/contact_me.js') }}"></script>
        <script src="{{ asset('user/js/clean-blog.min.js') }}"></script>
    </body>
</html>
