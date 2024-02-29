<?php
    $serverName = "localhost";
    $dbUserName = "root";
    $dbPass = "";
    $dbName = "petdirectory";

    $conn = mysqli($serverName, $dbUserName, $dbPass, $dbName);

    if(!$conn){
        die("Cannot connect to database.".mysqli_connect_error);
    }