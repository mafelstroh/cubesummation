<!DOCTYPE html>
<html lang="es">

<head>
    <title>Manuel F. Stroh S. - Cube Summation Challenge - Gravility Coding Test</title>
    <link href="./css/app.css" rel="stylesheet" type="text/css">
</head>
<body>

   <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation"><a href="#">About</a></li>
            <li role="presentation"><a href="#">Contact</a></li>
          </ul>
        </nav>
        <h1 class="text-muted">Cube Summation</h1>
      </div>

      <div class="jumbotron">
        <h3>Cube Summation - Coding challenge by HackerRank</h3>
        <p class="lead">Official instructions can be found <a href="https://www.hackerrank.com/challenges/cube-summation" target="_blank">here</a></p>
        <p><a class="btn btn-lg btn-success" href="#" role="button">Start Challenge</a></p>
      </div>
      <footer class="footer">
        <p>&copy; 2016 Manuel F. Stroh S.</p>
      </footer>

    </div>

<div class="main-console" id="main">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @yield('content')
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
</body>
</html>