<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Step 6 - Animating Interactivity</title>
        <script src="https://d3js.org/d3.v3.min.js" charset="utf-8"></script>

    <link data-require="normalize@*" data-semver="3.0.1" rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/normalize/4.1.1/normalize.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <style>
      #chart {
        height: 360px;
        margin: 0 auto;                                               /* NEW */
        position: relative;
        width: 360px;
      }
      .tooltip {
        background: #eee;
        box-shadow: 0 0 5px #999999;
        color: #333;
        display: none;
        font-size: 12px;
        left: 130px;
        padding: 10px;
        position: absolute;
        text-align: center;
        top: 95px;
        width: 80px;
        z-index: 10;
      }
      .legend {
        font-size: 12px;
      }
      rect {
        cursor: pointer;                                              /* NEW */
        stroke-width: 2;
      }
      rect.disabled {                                                 /* NEW */
        fill: transparent !important;                                 /* NEW */
      }                                                               /* NEW */
      h1 {                                                            /* NEW */
        font-size: 14px;                                              /* NEW */
        text-align: center;                                           /* NEW */
      }                                                               /* NEW */
    </style>
  </head>
  <body>
           <!-- NEW -->
    
    <div id="chart"></div>
    
    <?php 
    include('graphLogic.php');
      
      getStudent();
    ?>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="../javascripts/ddtest.js"></script>
  </body>
</html>