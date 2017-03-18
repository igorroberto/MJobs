<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fatec BB</title>
    <meta name="description" content="Site educacional da Fatec Bebedouro para consulta de informações referentes a faculdade.">
    <link href="{!! asset("assets/stylesheets/bootstrap.min.css") !!}" rel="stylesheet">
    <link href="{!! asset("assets/stylesheets/estilo.css") !!}" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>

	

<div class="fatec-bb">
  <header> @include('layout.header') </header>
  <div class="contents"> @yield('content') </div>
  <footer> @include('layout.footer') </footer>
    
       <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{!! asset("assets/scripts/jquery.js") !!}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{!! asset("assets/scripts/bootstrap.min.js") !!}"></script>
    @yield('scripts')
</div>
</body>
</html>