<!DOCTYPE html>
<html lang="en">
<head> @include('admin.layouts.head') </head>
<body class="hold-transition skin-red sidebar-mini">

<div class="wrapper">
    @include('admin.layouts.header')
    @include('admin.layouts.sidebar')

    @yield('main')

    @include('admin.layouts.footer')

</div>


@include('admin.layouts.body_scripts')
</body>
</html>
