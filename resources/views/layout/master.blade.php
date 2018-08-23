<!doctype html>
<html lang="fr">
    <head>
    	@yield('enteteHtml')
    	@include('layout/parials/_enteteHtml')
            <!-- Title  -->
    	<title>E_Santé | {{$title or ' ' }}</title>
    </head>
    <body>
        @include('layout/parials/_entetePage')

        @yield('content')

        @include('layout/parials/_footer')

        @yield('script')
        @include('layout/parials/_script')
    </body>
</html>