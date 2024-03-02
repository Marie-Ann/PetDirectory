<?php 
    if(isset($_REQUEST["submit"])){
        $firstName = $_POST["firstname"];
        $lastName = $_POST["lastname"];
        $password = $_POST["pwd"];
        $pwdVerify = $_POST["retypePwd"];
        $phoneNumber = $_POST["phone"];
        $address = $_POST["address"];
        $email = $_POST["email"];

        require_once "db.inc.php";
        require_once "functions.inc.php";

        if(empty($firstName) || empty($lastName) || empty($password) || empty($email)){
            echo "Could not leave first name, last name, password, and email blank";
            exit;
        }

        
    }

