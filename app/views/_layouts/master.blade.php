<!doctype html>
<html lang="en">
<head>
  <title>User management</title>

  <meta charset="utf-8">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <?php
  echo HTML::script('js/bootstrap.js');
  echo HTML::script('js/tablesorter.js');
  echo HTML::style('css/bootstrap.css');
  ?>

  <script type="text/javascript">
  $(document).ready(function() 
    { 
      $("#citiesIndex").tablesorter(); 
    } 
  ); 
  </script>

  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body>
  <div class="container">
    @yield('content')
  </div>
</body>
</html>