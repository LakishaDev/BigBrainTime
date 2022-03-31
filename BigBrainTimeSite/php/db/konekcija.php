<?php 
    $serverName = "localhost";
    $port = "root";
    $pass = "";
    $dbname = "BBT";

    $con = mysqli_connect($serverName, $port, $pass, $dbname);

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
?>