<!DOCTYPE html>
<html>
<head>
    @include('layouts/partials/_entete')
</head>

<body class="theme-cyan">
<!-- Page Loader -->
@include('layouts/partials/_navbar')
@yield('contenu')
@include('/layouts/partials/_scripts')

<!-- #Top Bar -->

</body>
</html>