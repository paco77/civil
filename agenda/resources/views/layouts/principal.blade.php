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

    <title>Civiles</title>

    {!!Html::style('css/bootstrap.min.css')!!}
    {!!Html::style('css/ie10-viewport-bug-workaround.css')!!}
    {!!Html::script('js/ie-emulation-modes-warning.js')!!}
    {!!Html::style('carousel.css')!!}
    {!!Html::style('css/style1.css')!!}
    <link rel="stylesheet" type="text/css" href="css/mobile.css">
    <script src="js/mobile.js" type="text/javascript"></script>
  </head>
<body>
        <div id="header">
            <div>
                <a href="{{view('welcome')}}" class="logo"><img src="../img/logo.png" alt=""></a>
                <ul id="navigation">
                    <li class="selected">
                        <a href="{{route('profes.index')}}">LISTAR</a>
                    </li>
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li class="menu">
                        <a href="{{route('profes.create')}}">REGISTRAR</a>
                        <!--<ul class="primary">
                            <li>
                                <a href="proj1.html">proj 1</a>
                            </li>
                        </ul>-->
                    </li>
                    <li class="menu">
                        <a href="blog.html">Blog</a>
                        <ul class="secondary">
                            <li>
                                <a href="singlepost.html">Single post</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="content" style="width: 100%;">
        @yield('content')
        </div>
        <div id="footer">
            <div class="connect">
                <div>
                    <h1>FOLLOW OUR  MISSIONS ON</h1>
                    <div>
                        <a href="http://freewebsitetemplates.com/go/facebook/" class="facebook">facebook</a>
                        <a href="http://freewebsitetemplates.com/go/twitter/" class="twitter">twitter</a>
                        <a href="http://freewebsitetemplates.com/go/googleplus/" class="googleplus">googleplus</a>
                        <a href="http://pinterest.com/fwtemplates/" class="pinterest">pinterest</a>
                    </div>
                </div>
            </div>
            <div class="footnote">
                <div>
                    <p>&copy; 2023 BY SPACE PROSPECTION | ALL RIGHTS RESERVED</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>