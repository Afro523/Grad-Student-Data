<!DOCTYPE html>
<html>
  <head>
      <title>Graduate Outcome Data Processing</title>

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="../stylesheets/dashStyles.css">
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
              <a type="link" class="btn btn-primary" href="landingPage.html" role="button">Home</a>
              <a type="link" class="btn btn-primary" href="dataVerify.php" role="button">Data Editing</a>
              <a type="link" class="btn btn-primary" href="#" role="button">Dashboard</a>
              <a type="link" class="btn btn-primary" href="graphGeneration.html" role="button">Graph Generation</a>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav> <!-- /Nav -->
  	<div class="jumbotron">
     		<div class="container">
       		<h1>Welcome to CSDMP</h1>
       		<h3>Graph Generation</h3>

     		</div>
    </div>
    <div class="container-fluid">
      <table id="table1" class="table table-bordered">
        <thead>
          <tr class="info">
            <th id="label">Row Labels</th>
            <th>EmpFT Students</th>
            <th>Rate</th>
            <th>EmpPT Students</th>
            <th>Rate</th>
            <th>ContEd Enrolled Students</th>
            <th>Rate</th>
            <th>ContEd Planning Students</th>
            <th>Rate</th>
            <th>Military Students</th>
            <th>Rate</th>
            <th>Volunteer Students</th>
            <th>Rate</th>
            <th>Seeking Students</th>
            <th>Rate</th>
            <th>Not Seeking Students</th>
            <th>Rate</th>
            <th>Total Students</th>
            <th>Total Rate</th>
          </tr>
        </thead>
        <!-- Fill in with data -->
          <tbody id="output">
            <th><button id="bachExpand"><span class="glyphicon glyphicon-plus"></span></button> Bachelors</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tbody>
          <tbody id="" class="drill collapse">
            <th><button><span id="healthExpand" class="glyphicon glyphicon-plus"></span></button>College of Health Professions </th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tbody>
          <tbody id="" class="drill2 collapse">
            <th><button><span id="campusExpand" class="glyphicon glyphicon-plus"></span></button>New York</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tbody>
          <tbody id="" class="drill2 collapse">
            <th><button><span id="campusExpand" class="glyphicon glyphicon-plus"></span></button>Pleasantville</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tbody>
          <tbody id="" class="drill collapse">
            <th><button><span id="dysonExpand" class="glyphicon glyphicon-plus"></span></button>Dyson College Arts & Sciences </th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tbody>
          <tbody id="" class="drill collapse">
            <th><button><span id="lubinExpand" class="glyphicon glyphicon-plus"></span></button>Lubin School of Buisness </th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tbody>
          <tbody id="" class="drill collapse">
            <th><button><span id="edExpand" class="glyphicon glyphicon-plus"></span></button>School of Education </th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tbody>
          <tbody id="" class="drill collapse">
            <th><button><span id="csisExpand" class="glyphicon glyphicon-plus"></span></button>Seidenberg School of CSIS</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tbody>
          <tbody id="" class="drill2 collapse">
            <th><button><span id="campusExpand" class="glyphicon glyphicon-plus"></span></button>New York</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tbody>
          <tbody id="" class="drill2 collapse">
            <th><button><span id="campusExpand" class="glyphicon glyphicon-plus"></span></button>Pleasantville</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tbody>
          <tbody id="" class="drill3 collapse">
            <th>Major 1</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tbody>
        <thead>
          <tr class="info">
            <th>Grand Total</th>
            <th id="">EmpFT Total</th>
            <th>Rate %</th>
            <th>EmpPT Total</th>
            <th>Rate %</th>
            <th>ContEdEnrolled Total</th>
            <th>Rate %</th>
            <th>ContEdPlanning Total</th>
            <th>Rate %</th>
            <th>Military Total</th>
            <th>Rate %</th>
            <th>Volunteer Total</th>
            <th>Rate %</th>
            <th>Seeking Total</th>
            <th>Rate %</th>
            <th>NotSeeking Total</th>
            <th>Rate %</th>
            <th>Total Students</th>
            <th>Total %</th>
          </tr>
      </table>
      <button id="submit">GO</button>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../javascripts/dash.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </body>
</html>