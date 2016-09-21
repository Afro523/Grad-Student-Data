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
     $page    = (isset($_GET['page']) ? $_GET['page'] : 1);
    /*    if($page=="" || $page==1)
    {
        $page1=0;
    }
    else
    {
        $page1=$page;
    }*/

    //for($i=1 ; $i<=$count ; $i++){

    $query = "select * from student LIMIT 2 offset $page";

    $studentInfo = $mysqli->query($query);

    $row = $studentInfo->fetch_array();

    //Each key needs outcomes go and get them!
    $studentKey = $row['pkey'];

    $query = "call getoutcome(".$studentKey.")";
    $studentOutcome = $mysqli->query($query);
    

    while($row = $studentInfo->fetch_array()){
        $outRow = $studentOutcome->fetch_array();
        echo "<tr >";
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
    echo "<td>" . $outRow['dateseen'] . " </td>";
    echo "<td>" . $outRow['approved'] . " </td>";
    echo "</tr>";
}

    $count = mysqli_num_rows($studentInfo);

      //  for($i=1 ; $i<=50 ; $i++)
        //{
            
            ?> <a id=""i"" class="btn btn-primary" style="visible:none" href="dataVerify.php?page=<?php echo $page-1; ?>"> LAST </a>&nbsp&nbsp&nbsp    <a id=""i"" class="btn btn-primary" style="visible:none" href="dataVerify.php?page=<?php echo $page+1; ?>"> NEXT </a>
            <?php

        //}

}


?>