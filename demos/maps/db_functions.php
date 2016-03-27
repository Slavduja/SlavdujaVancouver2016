<?php
/**
 * Created by PhpStorm.
 * User: matthewcatellier
 * Date: 2016-02-03
 * Time: 5:36 PM
 */
require_once ("db_info.php");
$database = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if(mysqli_connect_errno() != 0) {
    die("connection error: " . mysqli_connect_error());
}

$query = "SELECT * FROM spots_1;";

$queryResult = $database->query($query);
$num_rows = $queryResult->num_rows;

if($num_rows > 0) {
    while($record =$queryResult->fetch_assoc()) {
        echo $record['address'];
    }
}


