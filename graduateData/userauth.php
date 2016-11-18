<!DOCTYPE html>
<?php

$mysqli = new mysqli("localhost", "root");
$databaseSelect = 'userauthdb';
$error = "";
$username = "";
$password = "";
if ($mysqli->connect_errno) {
  echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
  }

$db = mysqli_select_db ($mysqli, $databaseSelect);

if (! $db) {
  echo "no db";
  
}
  if (isset($_POST['submit'])) {

    if (empty(($_POST['lg_username'])) || empty(($_POST['lg_password']))){
      $error = "Username or Password is invalid";

    }
    else{

    $username=$_POST['lg_username'];
    $password=$_POST['lg_password'];

    $query = "select * from login where password='$password' and username='$username'";
    $result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
    $rows = mysqli_num_rows($result);
    if ($rows == 1) {
      // Initializing Session
      header("location: index.php"); // Redirecting To Other Page
  } 
    else {
      $error = "Username or Password is invalid";
  }
  mysqli_close($mysqli);
  }
}

 // Starting Session

/*$connection = mysql_connect("localhost", "root", "");
$db = mysql_select_db("userauthdb", $connection);
$error='hello'; // Variable To Store Error Message

if (isset($_POST['submit'])) {
  $error='1';}
// if (($_POST['lg_username']) == '' || ($_POST['lg_password']) == '') {
/* $error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['lg_username'];
$password=$_POST['lg_password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter

// To protect MySQL injection for Security purpose

// Selecting Database

// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("select * from login where password='$password' AND username='$username'", $connection);
$rows = mysql_num_rows($query);
if ($rows == 1) {
// Initializing Session
header("location: index.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}
mysql_close($connection); // Closing Connection
}
}
*/

?>

<html>
  <head>
      <title>Graduate Outcome Data Processing</title>
      <link rel="stylesheet" href="userauth.css">
      <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
      
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
              
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav> <!-- /Nav -->

 <div class="jumbotron" style=" margin-bottom: 0px; padding-bottom: 25px; border-top-width: 20px;">
      <div class="container" >
        <h1>Welcome to GODP</h1>
        <h3>(Graduate Outcome Data Processing)</h3>
      </div>
    </div>

    <div class="container" style=" margin-left:0px; width:530px; height:300px;">
      <div class="text-center" style="padding:10px">
  <div class="logo">login</div>
  <!-- Main Form -->
  <div class="login-form-1">

    <form id="login-form" class="text-left" method = "POST">

      <div class="login-form-main-message"></div>
      <div class="main-login-form">
        <div class="login-group">
          <div class="form-group">
            <label for="lg_username" class="sr-only">Username</label>
            <input type="text" class="form-control" id="lg_username" name="lg_username" placeholder="username">
          </div>
          <div class="form-group">
            <label for="lg_password" class="sr-only">Password</label>
            <input type="password" class="form-control" id="lg_password" name="lg_password" placeholder="password">
          </div>
          <div class="form-group login-group-checkbox">
            <input type="checkbox" id="lg_remember" name="lg_remember">
            <label for="lg_remember">remember</label>
          </div>
        </div>
        <input type="submit" name = "submit" value = ">" class="login-button"></i></input>
        <span><?php echo $error; ?></span>
      </div>
      <div class="etc-login-form">
        <p>forgot your password? <a href="#">click here</a></p>
        <p>new user? <a href="/Grad-Student-Data-master/graduateData/reg.php">create new account</a></p>
      </div>
    </form>
  </div>
  <!-- end:Main Form -->
</div>
      

      <nav class="navbar navbar-default navbar-fixed-bottom">
        <p>&copy; Pace University - Career Services Center</p>
      </nav>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript ================================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="javascripts/basicJs.js"></script>
    
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </body>
</html>