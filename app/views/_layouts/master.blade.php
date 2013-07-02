<!doctype html>
<html lang="fr">
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
  <style type="text/css">
    .nav {
      position: fixed;
      top: 75px;
    }
  </style>
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>

<body>

  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span2">
        @section('sidebar')
        @show
      </div>
      <div class="span10">
        @yield('content')
      </div>  
    </div>
  </div>

</body>

</html>