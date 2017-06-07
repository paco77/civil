<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Sticky Footer Navbar Template for Bootstrap</title>

    {!!Html::style('css/bootstrap.min.css')!!}
    {!!Html::style('css/ie10-viewport-bug-workaround.css')!!}
    {!!Html::script('js/ie-emulation-modes-warning.js')!!}
    {!!Html::style('carousel.css')!!}
  </head>

  <body style="background-color:rgb(110,255,100);opacity:0.8;">

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">AGENDA CIVILES</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">LISTADO</a></li>
            <li><a href="#about">AGREGAR</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<br>
<br><br>
<br><br>
<br><br>

    <!-- Begin page content -->
    <div class="container">
    <h1 style="text-align: center;">DATOS PERSONALES</h1>
      @yield('content')
    </div>

    <footer class="footer">
      <div class="container">
        <p class="text-muted">Place sticky footer content here.</p>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('{!!Html::script('js/vendor/jquery.min.js')!!}')</script>
    {!!Html::script('js/bootstrap.min.js')!!}
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    {!!Html::script('js/ie10-viewport-bug-workaround.js')!!}
  </body>
</html>
