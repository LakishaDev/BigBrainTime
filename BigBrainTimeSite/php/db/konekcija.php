<?php 
    include "./php/config/settings.php";
    $con = mysqli_connect($serverName, $port, $pass, $dbname);

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
?>