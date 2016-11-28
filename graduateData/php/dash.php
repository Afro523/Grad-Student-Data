<?php
function getBachelors(){
    $mysqli = new mysqli("localhost", "root");
    $databaseSelect = 'graduateoutcomes';
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

    $db = mysqli_select_db ($mysqli, $databaseSelect);

    if (! $db) {
    echo "no db";
    }
    
    $query = "call getUndergrads()";
    $result = $mysqli->query($query);

    while ($row = $result->fetch_array()) {
        $rows[] = $row;
    }
    echo "HI!";

    
    $fp = fopen('../dataFiles/jsonFile.json', 'w');
    fwrite($fp, json_encode($rows));
    fclose($fp);
    
    mysqli_close($mysqli);
}
?>