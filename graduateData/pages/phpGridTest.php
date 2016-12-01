<?php
require_once("../phpGrid_Lite/conf.php");      
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHP Datagrid - Apply Filter Method</title>
</head>
<body> 

<?php
$dg = new C_DataGrid("SELECT * FROM student", "level", "student");

$dg->set_col_width("paceemail",'400');
$dg->set_col_width("school",'600');

$dg->set_query_filter("level='Undergradu'");

// - OR - 
// $dg->set_query_filter("status='Shipped' AND YEAR(shippedDate) = 2003");

$dg -> display();
?>

</body>
</html>