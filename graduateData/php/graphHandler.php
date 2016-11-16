<?php
$mysqli = new mysqli("localhost", "root");
	$databaseSelect = 'graduateoutcomes';
	if ($mysqli->connect_errno) {
    	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}

	$db = mysqli_select_db ($mysqli, $databaseSelect);

	if (! $db) {
 		echo "no db";
	}

	$school2= "'" . $_POST['graphSelect1'] . "'";
	if ($school2=="''" || $school2=="undefined" || $school2=="all"){
		$school2 = "null";
	}

	$query = "call getemployedbycampus";

	$result = mysqli_query($mysqli, $query);

	$fp = fopen('../dataFiles/file.csv', 'w');

	//For our d3 we use a csv style of label,count for the pie chart
	$csvline = "label,count" . PHP_EOL;
	fwrite($fp, $csvline);
	while ($row = mysqli_fetch_array($result)){
		$csvline = $row['campus'] . "," . $row['COUNT(pkey)']  . PHP_EOL;
		fwrite($fp, $csvline);
	}


	$query = "call getemployedbyschool";

	$result = mysqli_query($mysqli, $query);

	$fp = fopen('../dataFiles/file.csv', 'w');

	//For our d3 we use a csv style of label,count for the pie chart
	$csvline = "label,count" . PHP_EOL;
	fwrite($fp, $csvline);
	while ($row = mysqli_fetch_array($result)){
		$csvline = $row['school'] . "," . $row['COUNT(pkey)']  . PHP_EOL;
		fwrite($fp, $csvline);
	}

	fclose($fp);

    mysqli_close($mysqli);
?>