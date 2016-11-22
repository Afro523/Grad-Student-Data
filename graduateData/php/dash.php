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
    
    $query = "SELECT * FROM 'student' WHERE LEVEL = 'Undergradu'";
    $result = $mysqli->query($query);

    while ($output = $result->fetch_array()) {
    echo "<li><a type=\"button\" class=\"btn\"> " . $result . "</a></li>";
    }
    
}
?>