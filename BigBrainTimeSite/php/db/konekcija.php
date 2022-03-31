<?php 
    $dbserverName = "localhost";
    $dbusername = "root";
    $dbpass = "";
    $dbname = "BBT";

    $con = mysqli_connect($dbserverName, $dbusername, $dbpass, $dbname);

    $db = new mysqli($dbserverName, $dbusername, $dbpass, $dbname);  

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    if ($db->connect_error) {  
        die("Connection failed: " . $db->connect_error);  
    }
?>