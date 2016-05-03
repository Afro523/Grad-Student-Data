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

/* Select queries return a resultset /
if ($result = $mysqli->query($query)) {
    $row = $result->fetch_array();

    //printf("Select returned %d rows.\n", $result->num_rows);

    /// free result set */

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
    //Data Set of All Students
    $query = "select * from student";

    $studentInfo = $mysqli->query($query);
    $row = $studentInfo->fetch_array();
    //Each key needs outcomes go and
    $studentKey = $row['pkey'];

    $query = "call getoutcome(".$studentKey.")";
    $studentOutcome = $mysqli->query($query);
    $outRow = $studentOutcome->fetch_array();

    echo "<td>" . $row['lastname'] . ", " . $row['firstname'] . " </td>";
    echo "<td>" . $row['school'] . " </td>";
    echo "<td>" . $row['major'] . " </td>";
    echo "<td>" . $row['degree'] . " </td>";
    echo "<td>" . $row['campus'] . " </td>";
    echo "<td>" . $row['visa'] . " </td>";
    echo "<td>" . $outRow['Primary Status'] . " </td>";
    echo "<td>" . $outRow['salary'] . " </td>";
    echo "<td>" . $outRow['related2studyind'] . " </td>";
    echo "<td>" . $outRow['EmploymentCategory'] . " </td>";
    echo "<td>" . $outRow['entity'] . " </td>";
    echo "<td>" . $outRow['position'] . " </td>";
    echo "<td>" . $outRow['JobFunction'] . " </td>";
    echo "<td>" . $outRow['datecreated'] . " </td>";
    echo "<td>" . $outRow['approved'] . " </td>";
}


getStudent();
?>