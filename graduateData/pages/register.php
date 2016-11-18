<!DOCTYPE html>
<html>
  <head>
      <title>Graduate Outcome Data Processing</title>
      <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
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
              <a type="link" class="btn btn-primary" href="../index.php" role="button">Home</a>
              <a type="link" class="btn btn-primary" href="pages/dataVerify.php" role="button" disabled>Data Editing</a>
              <a type="link" class="btn btn-primary" href="pages/d3test.html" role="button" disabled>Test Page</a>
              <a type="link" class="btn btn-primary" href="pages/graphGeneration.html" role="button" disabled>Graph Generation</a>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav> <!-- /Nav -->

 <div class="jumbotron">
      <div class="container" >
        <h1>Welcome to GODP</h1>
        <h3>(Graduate Outcome Data Processing)</h3>
      </div>
    </div>

    <div class="container">
      <div class="text-center">
  <!-- REGISTRATION FORM -->
<div class="text-center">
  <h4>Register</h4>
  <!-- Main Form -->
  <div class="login-form-1">
    <form id="register-form" class="text-left" method="post">
      <div class="login-form-main-message"></div>
      <div class="main-login-form">
        <div class="login-group">
          <div class="form-group">
            <label for="reg_username" class="sr-only">Email Address</label>
            <input type="text" class="form-control" id="reg_username" name="reg_username" placeholder="username">
          </div>
          <div class="form-group">
            <label for="reg_password" class="sr-only">Password</label>
            <input type="password" class="form-control" id="reg_password" name="reg_password" placeholder="password">
          </div>
          <div class="form-group">
            <label for="reg_password_confirm" class="sr-only">Password Confirm</label>
            <input type="password" class="form-control" id="reg_password_confirm" name="reg_password_confirm" placeholder="confirm password">
          </div>
          
          <div class="form-group">
            <label for="reg_email" class="sr-only">Email</label>
            <input type="text" class="form-control" id="reg_email" name="reg_email" placeholder="email">
          </div>
          <div class="form-group">
            <label for="reg_fullname" class="sr-only">Full Name</label>
            <input type="text" class="form-control" id="reg_fullname" name="reg_fullname" placeholder="full name">
          </div>
          
          <div class="form-group login-group-checkbox">
            <input type="checkbox" class="" id="reg_agree" name="reg_agree">
            <label for="reg_agree">I Agree With <a href="#">Terms and Conditions</a></label>
          </div>
        </div>
        <input class="btn" type="submit" name="submit" value = ">" class="login-button"></i></input>
      </div>
      <div class="etc-login-form">
        <p>Already Have An Account? <a href="../index.php">Login Here</a></p>
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
    <script src="javascripts/dynamicDrop.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </body>
</html>