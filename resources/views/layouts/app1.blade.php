<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Clinique</title>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }} " rel="stylesheet">
    <link href="{{ asset('css/bootstrap-theme.min.css') }} " rel="stylesheet">
    <link href="{{ asset('css/style.css') }} " rel="stylesheet">
    <link href="{{ asset('css/css/Normalize.css') }} " rel="stylesheet">
    <link href="{{ asset('css/css/font-awesome/css/font-awesome.min.css') }} " rel="stylesheet">

    <link rel="icon" href="favicon.png" />

</head>
<body>

    @yield('content')
    <!-- Scripts -->
    <script src="{{ asset('js/jquery-1.11.3.min.js') }}"></script>
   
    
    
</body>
</html>
