<!DOCTYPE html>
<html>
  <head>
      <title>Graduate Outcome Data Processing</title>

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
      <link href="../stylesheets/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />
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
          <h4 class="h4">CSDMP</h4>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
              <a type="link" class="btn btn-primary" href="../index.html" role="button">Home</a>
              <a type="link" class="btn btn-primary" href="dataVerify.html" role="button">Data Editing</a>
              <a type="link" class="btn btn-primary" href="#" role="button">Dashboard</a>
              <a type="link" class="btn btn-primary" href="graphGeneration.html" role="button">Graph Generation</a>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav> <!-- /Nav -->

    <!-- Jumbotron-->
    <div class="jumbotron">
      <div class="container">
        <h1>Welcome to CSDMP</h1>
        <h3>Data Editing & Verification</h3>
      </div>
    </div>
    <!--Real Body Begins -->
    <div class="container-fluid">
        <div class="btn-group-vertical col-md-3 col-xs-3">

        <!--Verification DropDown-->
          <div class = "btn-group">
            <button id="json-one" type = "button" class = "btn btn-primary dropdown-toggle" data-toggle ="dropdown">
                Verification Status
              <span class = "caret"></span>
            </button>
            <ul class = "dropdown-menu" role = "menu">
                <li><a selected="" value="base">Select One</a></li>
                <li href="#"><a>Yes</a></li>
                <li><a>No</a></li>
                <li><a>All</a></li>
            </ul>
          </div>


      </div>
      
      <!--Data Display-->
      <div class="containter col-md-8 col-xs-3">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th class="text-center">Name</th>
              <th class="text-center">School</th>
              <th class="text-center">Major</th>
              <th class="text-center">Degree</th>
              <th class="text-center">Campus</th>
              <th class="text-center">Visa Status</th>
              <th class="text-center">Primary Status</th>
              <th class="text-center">Salary</th>
              <th class="text-center">Related to Study</th>
              <th class="text-center">Employer Category</th>
              <th class="text-center">Employer Name</th>
              <th class="text-center">Job Title</th>
              <th class="text-center">Job Function</th>
              <th class="text-center">Job Start Date</th>
              <th class="text-center">Verified</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <?php
              include('sqlstuff.php');
              //connectToSQL();
              getStudent();

              ?>
            </tr>
          </tbody>

        </table>
              <div class="btn-group cold-md-3 col-xs-3">
        <button class="btn btn-primary" >
          Last
        </button>
        <button class="btn btn-primary" >
          Next
        </button>
      </div>
      </div>
      <nav class="navbar navbar-default navbar-fixed-bottom">
        <p>&copy; Pace University - Career Services Center</p>
      </nav>
    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript ================================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../javascripts/basicJs.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </body>
</html>