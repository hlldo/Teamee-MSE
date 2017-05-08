<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, minimum-scale=1">
    <meta name="utf-8">
    <meta name="keywords" content="tea, drinks, relaxation, boba">
    <meta name="description" content="#">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link type="text/css" rel="stylesheet" href="{{ URL::to('css/materialize.min.css') }}" />
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::to('css/teamee.css') }}">
    

    @yield('styles')
</head>
<body>
@include('partials.header')
    @yield('content')
@include('footer')

<!-- Compiled and minified JavaScript -->
<script src="{{ URL::to('js/jquery-3.2.1.min.js') }}"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
 <script src="{{ URL::to('js/teamee.js') }}"></script>
@yield('scripts')
</body>
</html>
