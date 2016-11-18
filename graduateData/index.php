<!DOCTYPE html>
<?php

?>
<html>
  <head>
      <title>Graduate Outcome Data Processing</title>

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
      <link href="/stylesheets/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <h4 class="h4">GODP</h4>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
              <a type="link" class="btn btn-primary" href="index.html" role="button">Home</a>
              <a type="link" class="btn btn-primary" href="pages/dataVerify.php" role="button">Data Editing</a>
              <a type="link" class="btn btn-primary" href="pages/d3test.html" role="button">Test Page</a>
              <a type="link" class="btn btn-primary" href="pages/graphGeneration.html" role="button">Graph Generation</a>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav> <!-- /Nav -->

 <div class="jumbotron">
      <div class="container">
        <h1>Welcome to CSDMP</h1>
        <h3>(Career Services Data Management Program)</h3>
      </div>
    </div>

    <div class="container">
      <table class="table">
        <thead>
          <tr class="text-center">
            <th class="col-md-3">Data Editing & Verification</th>
            <th class="col-md-3">Dashboard</th>
            <th class="col-md-3">Graph Generation</th>
            <th class="col-md-3">Heading</th>
          </tr>
        </thead>
        <tbody>
          <tr>
          <!--Data Editing Button-->
            <td><a class="btn btn-default" href="pages/dataVerify.php" role="button">View details &raquo;</a></td>
          <!--Dashboard Button -->
            <td><a class="btn btn-default" href="#" role="button" data-toggle="construction" data-content="This Page is Under Construction" >View details &raquo;</a></td>
          <!--Graph Generation-->
            <td><a class="btn btn-default" href="pages/graphGeneration.html" role="button">View details &raquo;</a></td>
          <!--Another Button-->
            <td><a class="btn btn-default" href="#" role="button" data-toggle="construction" data-content="This Page is Under Construction" >View details &raquo;</a></td>
          </tr>
        </tbody>

      </table>

      <nav class="navbar navbar-default navbar-fixed-bottom">
        <p>&copy; Pace University - Career Services Center</p>
      </nav>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript ================================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="javascripts/basicJs.js"></script>
    <script src="javascripts/dynamicDrop.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </body>
</html>