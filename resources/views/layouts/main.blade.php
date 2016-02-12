<!DOCTYPE html>
<html lang="es">

<head>
    <title>Manuel F. Stroh S. - Cube Summation Challenge - Gravility Coding Test</title>
    <link href="./css/app.css" rel="stylesheet" type="text/css"><!-- From CDN -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
</head>
<body>

    @include('vendor.toast.messages-jquery')
   
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

      @yield('content')

      <footer class="footer">
        <p>&copy; 2016 Manuel F. Stroh S.</p>
      </footer>

    </div>
</body>
</html>