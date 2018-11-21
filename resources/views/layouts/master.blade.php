<!DOCTYPE html>
<html lang="en">
<head>

    @include(('layouts.meta'))

    @yield('title')

    @include('layouts.css')

    @yield('css') <!--includes the dojo-->

</head>

<body role="document">

@include('layouts.facebook')

@include('layouts.nav')

<div class="container theme-showcase" role="main">
@yield('js') <!--The dojo-->
    @yield('content')

    @include('layouts.bottom')

</div> <!-- /container -->

@include('layouts.scripts')

@include('Alerts::show')
@yield('js') <!--The dojo-->
@yield('scripts')

</body>
</html>