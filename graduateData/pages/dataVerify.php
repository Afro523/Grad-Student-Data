<!DOCTYPE html>
<html>
  <head>
      <title>Graduate Outcome Data Processing</title>

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
      <link href="../stylesheets/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
  <?php include('sqlstuff.php');?>
  <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <h4 class="h4">CSMP</h4>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
              <a type="link" class="btn btn-primary" href="../index.html" role="button">Home</a>
              <a type="link" class="btn btn-primary" href="dataVerify.php" role="button">Data Editing</a>
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
        <h3>Data Editing and Verification</h3>
      </div>
    </div>
    <!--Real Body Begins -->
    <div class="container-fluid">
        <div class="btn-group-vertical col-md-2 col-xs-3">

        <!--School DropDown-->
          <div class = "btn-group">
            <button type = "button" class = "btn btn-primary dropdown-toggle" data-toggle ="dropdown">
                School
              <span class = "caret"></span>
            </button>
            <ul class = "dropdown-menu" role = "menu">
                <?php ?>
            </ul>
          </div>
        <!--Campus DropDown-->
          <div class = "btn-group">
            <button type = "button" class = "btn btn-primary dropdown-toggle" data-toggle ="dropdown">
                Campus
              <span class = "caret"></span>
            </button>
            <ul class = "dropdown-menu" role = "menu">
                <?php ?>
            </ul>
          </div>
          <!--Level DropDown-->
          <div class = "btn-group">
            <button type = "button" class = "btn btn-primary dropdown-toggle" data-toggle ="dropdown">
                Level
              <span class = "caret"></span>
            </button>
            <ul class = "dropdown-menu" role = "menu">
                <?php ?>
            </ul>
          </div>
          <!--Grad Year DropDown-->
          <div class = "btn-group">
            <button type = "button" class = "btn btn-primary dropdown-toggle" data-toggle ="dropdown">
                Grad Year
              <span class = "caret"></span>
            </button>
            <ul class = "dropdown-menu" role = "menu">
                <?php ?>
            </ul>
          </div>
          <!--Verification DropDown-->
          <div class = "btn-group">
            <button type = "button" class = "btn btn-primary dropdown-toggle" data-toggle ="dropdown">
                Verification Status
              <span class = "caret"></span>
            </button>
            <ul class = "dropdown-menu" role = "menu">
                <li href="#"><a>Yes</a></li>
                <li><a>No</a></li>
                <li><a>All</a></li>
            </ul>
          </div>
          <!--Reviewed DropDown-->
          <div class = "btn-group">
            <button type = "button" class = "btn btn-primary dropdown-toggle" data-toggle ="dropdown">
                Reviewed
              <span class = "caret"></span>
            </button>
            <ul class = "dropdown-menu" role = "menu">
                <li href="#"><a>Yes</a></li>
                <li><a>No</a></li>
                <li><a>All</a></li>
            </ul>
          </div>
        </div> <!--End DropDowns-->

      
      <!--Data Display-->
      <div class="panel-group col-md-9" id="accordion" role="tablist">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Outcome #1
            </a>
            </h4>
          </div>
        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
          <div class="form-inline">
            <div class="input-group col-md-2">
              <span class="input-group-addon" id="basic-addon1">Primary Status</span>
              <input type="text" class="form-control" aria-describedby="basic-addon1">
            </div>

          <div class="input-group col-md-2">
            <span class="input-group-addon">Salary</span>
            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
          </div>

          <div class="input-group col-md-2">
            <span class="input-group-addon">Related to Study</span>
            <input type="text" class="form-control" aria-describedby="basic-addon1">
          </div>
          <div class="input-group col-md-2">
            <span class="input-group-addon">Employer Category</span>
            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
          </div>
          <div class="input-group col-md-2">
            <span class="input-group-addon">Emplyer Name</span>
            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
          </div>
          <div class="input-group col-md-2">
            <span class="input-group-addon">Job Title</span>
            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
          </div>
          <div class="input-group col-md-2">
            <span class="input-group-addon">Job Function</span>
            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
          </div>
          <div class="input-group col-md-2">
            <span class="input-group-addon">Job Start Date</span>
            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
          </div>
          <div class="input-group col-md-2">
            <span class="input-group-addon">Verified</span>
            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
          </div>
        </div>
      </div>
    </div>


    <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingTwo">
            <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"  aria-controls="collapseTwo">
          Outcome #2
            </a>
            </h4>
          </div>
        <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
        <div class="panel-body">
          <div class="form-inline">
            <div class="input-group col-md-2">
              <span class="input-group-addon" id="basic-addon1">Primary Status</span>
              <input type="text" class="form-control" aria-describedby="basic-addon1">
            </div>

          <div class="input-group col-md-2">
            <span class="input-group-addon">Salary</span>
            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
          </div>

          <div class="input-group col-md-2">
            <span class="input-group-addon">Related to Study</span>
            <input type="text" class="form-control" aria-describedby="basic-addon1">
          </div>
          <div class="input-group col-md-2">
            <span class="input-group-addon">Employer Category</span>
            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
          </div>
          <div class="input-group col-md-2">
            <span class="input-group-addon">Emplyer Name</span>
            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
          </div>
          <div class="input-group col-md-2">
            <span class="input-group-addon">Job Title</span>
            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
          </div>
          <div class="input-group col-md-2">
            <span class="input-group-addon">Job Function</span>
            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
          </div>
          <div class="input-group col-md-2">
            <span class="input-group-addon">Job Start Date</span>
            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
          </div>
          <div class="input-group col-md-2">
            <span class="input-group-addon">Verified</span>
            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
          </div>
        </div>
      </div>
    </div>
  </div>

  </div>

      <!--<div class="containter col-md-8 col-xs-3">
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
            <tr> -->
              <?php
              //include('sqlstuff.php');
              //connectToSQL();
              getStudent();

              ?>
      </div>
     <!-- <nav class="navbar navbar-default navbar-fixed-bottom">
        <p>&copy; Pace University - Career Services Center</p>
      </nav> -->
    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript ================================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../javascripts/basicJs.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </body>
</html>