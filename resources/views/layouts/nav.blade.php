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

    <title>{{ config('app.name', 'Accueil') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }} " rel="stylesheet">
    <link href="{{ asset('css/bootstrap-theme.min.css') }} " rel="stylesheet">
    <link href="{{ asset('css/style.css') }} " rel="stylesheet">
    <link href="{{ asset('css/css/Normalize.css') }} " rel="stylesheet">
    <link href="{{ asset('css/css/font-awesome/css/font-awesome.min.css') }} " rel="stylesheet">

    <link rel="icon" href="favicon.png" />

</head>
<body>
<div class="nav">

<div class="navbar navbar-default navbar-fixed-top">
  
    <div class="container">
      
        <div class="navbar-header">

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">    
                    <span class="sr-only">Toggle navigation</span>      
                    <span class="icon-bar"></span>  
                    <span class="icon-bar"></span>  
                    <span class="icon-bar"></span>          
            </button> 

            <h2 class="h1_title">Clinique Koloma Centre <img src="{{ asset('image/logo-pharmacie.png') }}" alt="image" width="30" height="30"/></h2>

       </div>

        <div class="collapse navbar-collapse nav_right">
                                    
            <div class="btn-group">
<button  type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <a href="index.php" ><i class="glyphicon glyphicon-home large"></i></a></span>
              </button>
            </div>

            

         </div>

    </div>

</div>
@yield('content')
</div>
<div id="footer">
  Copyright &copy; <?php echo date("Y"); ?> | <a href="http://www.doum-soft.net" title="cliquez sur le lien pour acceder a notre site web">Doum~soft95</a> - system de gestion d'un clinique 
</div>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery-1.11.3.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/docs.min.js') }}"></script>
    <script src="{{ asset('js/ie10-viewport-bug-workaround.js') }}"></script>
    
    
</body>
</html>
