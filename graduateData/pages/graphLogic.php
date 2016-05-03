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

	$query = "call getemployedlevel()";
	$studentOutcome = $mysqli->query($query);
    //$outRow = $studentOutcome->fetch_array();
	//create an array
    $emparray = array();
    while($row = mysqli_fetch_assoc($studentOutcome))
    {
        $emparray[] = $row;
    }

    //write to json file
    $fp = fopen('../dataFiles/tempdata.json', 'w');
    fwrite($fp, json_encode($emparray));
    fclose($fp);

    $fp = fopen('file.csv', 'w');

    while($row = mysqli_fetch_assoc($studentOutcome) ){
	//foreach ($row as $val) {
    	fputcsv($fp, $row);
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