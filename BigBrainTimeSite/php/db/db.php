<?php
include "./php/db/konekcija.php";

function escape($string)
{
    global $con;
    return mysqli_real_escape_string($con, $string);
}

function query($query)
{
    global $con;
    return mysqli_query($con, $query);
}

function confirm($result)
{
    global $con;
    if (!$result) {
        die("QUERY FAILED " . mysqli_error($con));
    }
    if ($result) {
        return true;
    }else {
        return false;
    }
}

function redirect($lok)
{
    header("location: {$lok}");
    exit();
}