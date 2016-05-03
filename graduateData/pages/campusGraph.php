<?php

function connectToSQL(){

	$mysqli = new mysqli("localhost", "root");
	$databaseSelect = 'graduateoutcomes';
	
	if ($mysqli->connect_errno) {
    	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}

	$db = mysqli_select_db ($mysqli, $databaseSelect);

	if (! $db) {
 		echo "no db";
	}

}

function getStudent(){
	$mysqli = new mysqli("localhost", "root");
	$databaseSelect = 'graduateoutcomes';
	if ($mysqli->connect_errno) {
    	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}

	$db = mysqli_select_db ($mysqli, $databaseSelect);

	if (! $db) {
 		echo "no db";
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

	fclose($fp);

    mysqli_close($mysqli);
/*
    $query = "select * from student";

    $studentInfo = $mysqli->query($query);
    $row = $studentInfo->fetch_array();

    $studentKey = $row['pkey'];

    $query = "call getoutcome(".$studentKey.")";
    $studentOutcome = $mysqli->query($query);
    $outRow = $studentOutcome->fetch_array();
*/
}


?>